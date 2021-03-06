<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publicaciones Controller
 *
 * @property \App\Model\Table\PublicacionesTable $Publicaciones
 *
 * @method \App\Model\Entity\Publicacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicacionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'CatEstatus'],
        ];
        $publicacione = $this->paginate($this->Publicaciones);

        $this->set(compact('publicacione'));
    }

    public function publicacion(){
        $this->request->allowMethod(['post']);
        $this->viewBuilder()->setLayout("ajax");
        $publicacione = $this->Publicaciones->newEntity();
        $publicacione->usuario_id = $this->request->getSession()->read('Auth.User.id');
        $publicacione->cat_estatu_id = '10714ce4-816d-4df3-8417-282d1e3565dc';
        if ($this->request->is('post')) {
            $publicacione = $this->Publicaciones->patchEntity($publicacione, $this->request->getData());
            if ($this->Publicaciones->save($publicacione)) {
                return $this->response->withType("application/json")->withStringBody(json_encode(1));
            }
        }
        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }

    public function getPublicaciones(){
        $this->request->allowMethod(['get']);
        $this->viewBuilder()->setLayout("ajax");
        $publicacione = $this->Publicaciones->find('all',
            [
                'contain' => ['Usuarios' => ['conditions' => ['Publicaciones.cat_estatu_id' => '10714ce4-816d-4df3-8417-282d1e3565dc']]],
                'order' => ['Publicaciones.created' => 'DESC']
            ]
        );
        return $this->response->withType("application/json")->withStringBody(json_encode($publicacione));

    }
    public function getMispublicaciones(){
        $this->request->allowMethod(['get']);
        $this->viewBuilder()->setLayout("ajax");
        $publicacione = $this->Publicaciones->find('all',
            [
                'contain' => ['Usuarios' => ['conditions' => ['Usuarios.id' =>  $this->request->getSession()->read('Auth.User.id') , 'Publicaciones.cat_estatu_id' => '10714ce4-816d-4df3-8417-282d1e3565dc']]],
                'order' => ['Publicaciones.created' => 'DESC']
            ]
        );
        return $this->response->withType("application/json")->withStringBody(json_encode($publicacione));

    }
    /**
     * View method
     *
     * @param string|null $id Publicacione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicacione = $this->Publicaciones->get($id, [
            'contain' => ['Usuarios', 'CatEstatus'],
        ]);

        $this->set('publicacione', $publicacione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->request->allowMethod(['post']);
        $publicacione = $this->Publicaciones->newEntity();
        $publicacione->usuario_id = $this->request->getSession()->read('Auth.User.id');
        $publicacione->cat_estatu_id = '10714ce4-816d-4df3-8417-282d1e3565dc';
        if ($this->request->is('post')) {
            $publicacione = $this->Publicaciones->patchEntity($publicacione, $this->request->getData());
            if ($this->Publicaciones->save($publicacione)) {
                $this->Flash->success(__('Publicada'));

                return $this->redirect(['controller'=>'dashboard','action' => 'index']);
            }
            $this->Flash->error(__('Tu publicacion no se pudo publicar con exito.'));
        }
        $usuarios = $this->Publicaciones->Usuarios->find('list', ['limit' => 200]);
        $catEstatus = $this->Publicaciones->CatEstatus->find('list', ['limit' => 200]);
        $this->set(compact('publicacione', 'usuarios', 'catEstatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Publicacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->request->allowMethod(['put']);
        $this->viewBuilder()->setLayout("ajax");
        $publicacione = $this->Publicaciones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is('put')) {
            $publicacione = $this->Publicaciones->patchEntity($publicacione, $this->request->getData());
            if ($this->Publicaciones->save($publicacione)) {
                return $this->response->withType("application/json")->withStringBody(json_encode(1));
            }
        }
        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }

    /**
     * Delete method
     *
     * @param string|null $id Publicacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $publicacione = $this->Publicaciones->get($id);
        $publicacione->cat_estatu_id = 'd1ef0720-61c0-4608-b65b-9b04892f40a6';
        if ($this->Publicaciones->save($publicacione)) {
            return $this->response->withType("application/json")->withStringBody(json_encode(1));
        } else {
            return $this->response->withType("application/json")->withStringBody(json_encode(0));
        }

        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }
}
