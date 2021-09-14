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
        $publicaciones = $this->paginate($this->Publicaciones);

        $this->set(compact('publicaciones'));
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
        $publicacione = $this->Publicaciones->newEntity();
        if ($this->request->is('post')) {
            $publicacione = $this->Publicaciones->patchEntity($publicacione, $this->request->getData());
            if ($this->Publicaciones->save($publicacione)) {
                $this->Flash->success(__('The publicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicacione could not be saved. Please, try again.'));
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
        $publicacione = $this->Publicaciones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicacione = $this->Publicaciones->patchEntity($publicacione, $this->request->getData());
            if ($this->Publicaciones->save($publicacione)) {
                $this->Flash->success(__('The publicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicacione could not be saved. Please, try again.'));
        }
        $usuarios = $this->Publicaciones->Usuarios->find('list', ['limit' => 200]);
        $catEstatus = $this->Publicaciones->CatEstatus->find('list', ['limit' => 200]);
        $this->set(compact('publicacione', 'usuarios', 'catEstatus'));
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
        $this->request->allowMethod(['post', 'delete']);
        $publicacione = $this->Publicaciones->get($id);
        if ($this->Publicaciones->delete($publicacione)) {
            $this->Flash->success(__('The publicacione has been deleted.'));
        } else {
            $this->Flash->error(__('The publicacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
