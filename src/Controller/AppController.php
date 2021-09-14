<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Ldap\Auth\LdapAuthenticate;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Utility\Text;
use DateTime;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler',['enableBeforeRedirect'=>false]);
        $this->loadComponent('Flash');

        parent::initialize();
        ini_set('max_execution_time', "600"); //300 seconds = 5 minutes
        ini_set('memory_limit', '2048M');
    
        date_default_timezone_set('America/Bogota');
        $this->loadComponent('Auth', [
            'authError'    => 'Primero debes iniciar sesión.',
            'authenticate' => [
                'Form' => [
                    'userModel'=>'Usuarios',
                    'fields' => [
                        'username' => 'usuario',
                        'password' => 'password'
                    ]
                ]
            ], 
            'loginAction' => [
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
           
             //use isAuthorized in Controllers
            'authorize' => ['Controller'],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer(),

            'storage' => 'Session'
        ]);
        if($this->Auth->user()){
            $this->_getMenuBD(); 
            $this->getUserData();
        }
        $IndexPage = "/Dashboard/index/";
        $this->set(compact('IndexPage'));
    }

    public function getUserData(){
        $userData = [];
        $userData["nombrecompleto"] = $this->request->getSession()->read('Auth.User.nombre') . " " . $this->request->getSession()->read('Auth.User.apellido');
        $userData["nombre"] =  $this->request->getSession()->read('Auth.User.nombre');
        $userData["apellido"] =  $this->request->getSession()->read('Auth.User.apellido');
        $userData["usuario"] =  $this->request->getSession()->read('Auth.User.usuario');
        $userData["rol"] =  $this->request->getSession()->read('Auth.User.grupo.nombre');
        $userData["id"] =  $this->request->getSession()->read('Auth.User.id');
        $userData["imagen"] = false;
        // Verify if the user has an pic profile
        if( is_file( WWW_ROOT . 'files' . DS . 'userfiles' . DS .  $userData["id"] . DS . 'picture' . DS . 'pic.jpg') ){
            $userData["imagen"] = true;
        }
        //End verify
        $this->set(compact('userData'));
    }

    public function _getMenuBD()
    {
        $menusDB = [];
        $this->loadModel('Menus');
        $GruposID = $this->request->getSession()->read('Auth.User.grupo_id');
        $menusDB = $this->Menus->find
                            (
                                'all',
                                [
                                    'conditions'=>
                                        [
                                            'Menus.activo'=>1,
                                            'Menus.menu_id is null',
                                            'Menus.id IN (SELECT menu_id FROM grupos_menus WHERE grupos_menus.grupo_id = "'.$this->request->getSession()->read('Auth.User.grupo_id').'")'
                                        ],
                                    'order'=>'Menus.position ASC'
                                ]
                            )
                            ->contain(
                                'ChildrenMenus',
                                function($q) use ($GruposID)
                                {
                                    return $q->order(['ChildrenMenus.position ASC'])->where(['ChildrenMenus.activo'=>1,'ChildrenMenus.id IN (SELECT menu_id FROM grupos_menus WHERE grupos_menus.grupo_id = "'.$GruposID.'")']);
                                }
                            )->toArray();
        $this->request->getSession()->write('menusDB',$menusDB);
        $this->set(compact('menusDB'));
    }

    
    public function isAuthorized($user)
    {
        if(!$this->request->getSession()->check('permissions'))
        {
            $this->_getPermisosBD();
        }
        $permissions = $this->request->getSession()->read('permissions');
        $extras =
                    [
                        ['Permisos'=>['controller'=>'Usuarios','action'=>'logout']],
                        ['Permisos'=>['controller'=>'Usuarios','action'=>'login']],
                    ];
        $permissions = array_merge($extras,$permissions);
        foreach($permissions as $permission)
        {
            if($permission['Permisos']['controller'] == '*' && $permission['Permisos']['action'] == '*')
            {
                return true;
            }
            if($permission['Permisos']['controller'] == $this->request->getParam('controller') && $permission['Permisos']['action'] == '*')
            {
                return true;
            }
            if($permission['Permisos']['controller'] == $this->request->getParam('controller') && $permission['Permisos']['action'] == $this->request->getParam('action'))
            {
                return true;
            }
        }
        return true;
    }

    public function _getPermisosBD()
    {
        $tmp = array();
        $i = 0;
        if($this->request->getSession()->check('Auth.User.grupo_id'))
        {
            $Permisos = TableRegistry::get('Permisos');
            $permissions = $Permisos->find('all',['conditions'=>['Permisos.id IN (SELECT permiso_id FROM grupos_permisos WHERE grupos_permisos.grupo_id = "'.$this->Auth->user('grupo_id').'")'],'fields'=>['Permisos.id','Permisos.controller','Permisos.action']]);

            foreach($permissions as $permission)
            {
                $tmp[$i]['Permisos']['id'] = $permission->id;
                $tmp[$i]['Permisos']['controller'] = $permission->controller;
                $tmp[$i]['Permisos']['action'] = $permission->action;
                $i++;
            }
        }
        $this->request->getSession()->write('permissions',$tmp);
    }
}
