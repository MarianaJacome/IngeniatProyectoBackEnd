<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposPermisos Controller
 *
 * @property \App\Model\Table\GruposPermisosTable $GruposPermisos
 *
 * @method \App\Model\Entity\GruposPermiso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposPermisosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Permisos'],
        ];
        $gruposPermisos = $this->paginate($this->GruposPermisos);

        $this->set(compact('gruposPermisos'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Permiso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposPermiso = $this->GruposPermisos->get($id, [
            'contain' => ['Grupos', 'Permisos'],
        ]);

        $this->set('gruposPermiso', $gruposPermiso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposPermiso = $this->GruposPermisos->newEntity();
        if ($this->request->is('post')) {
            $gruposPermiso = $this->GruposPermisos->patchEntity($gruposPermiso, $this->request->getData());
            if ($this->GruposPermisos->save($gruposPermiso)) {
                $this->Flash->success(__('The grupos permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos permiso could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposPermisos->Grupos->find('list', ['limit' => 200]);
        $permisos = $this->GruposPermisos->Permisos->find('list', ['limit' => 200]);
        $this->set(compact('gruposPermiso', 'grupos', 'permisos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Permiso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposPermiso = $this->GruposPermisos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposPermiso = $this->GruposPermisos->patchEntity($gruposPermiso, $this->request->getData());
            if ($this->GruposPermisos->save($gruposPermiso)) {
                $this->Flash->success(__('The grupos permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos permiso could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposPermisos->Grupos->find('list', ['limit' => 200]);
        $permisos = $this->GruposPermisos->Permisos->find('list', ['limit' => 200]);
        $this->set(compact('gruposPermiso', 'grupos', 'permisos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Permiso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposPermiso = $this->GruposPermisos->get($id);
        if ($this->GruposPermisos->delete($gruposPermiso)) {
            $this->Flash->success(__('The grupos permiso has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos permiso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
