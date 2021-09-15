<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos'],
        ];
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Grupos', 'Publicaciones'],
        ]);

        $this->set('usuario', $usuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
       
        $grupos = $this->Usuarios->Grupos->find('all', ['conditions'=>['activo'=>1]]);
        $this->set(compact('usuario', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $grupos = $this->Usuarios->Grupos->find('all', ['conditions'=>['activo'=>1]]);
        $this->set(compact('usuario', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $usuario = $this->Auth->identify();
            if ($usuario) {
                $usuario['grupo'] = $this->Usuarios->Grupos->get($usuario['grupo_id']);
                $this->Auth->setUser($usuario);    
                //Redireccioar a la pagina de logueo
                // return $this->redirect(
                //     ['controller' => $user['co_grupo']['pagina_inicial'] , 'action' => 'index']
                // );
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Nombre de usuario o contraseña incorrectas.');
        }
    }
    
    public function logout()
    {
        $this->request->getSession()->destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function settheme()
    {
        $id = $this->request->getSession()->read('Auth.User.id');
        $usuario = $this->Usuarios->get($id);
        $usuario->activo = 0;
        if($this->Usuarios->save($usuario)){
            return $this->response->withType("application/json")->withStringBody(json_encode(1));
        } else{
            return $this->response->withType("application/json")->withStringBody(json_encode(0));
        }
    }
}
