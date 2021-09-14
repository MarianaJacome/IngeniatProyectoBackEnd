<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposMenus Controller
 *
 * @property \App\Model\Table\GruposMenusTable $GruposMenus
 *
 * @method \App\Model\Entity\GruposMenu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposMenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Menus'],
        ];
        $gruposMenus = $this->paginate($this->GruposMenus);

        $this->set(compact('gruposMenus'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Menu id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposMenu = $this->GruposMenus->get($id, [
            'contain' => ['Grupos', 'Menus'],
        ]);

        $this->set('gruposMenu', $gruposMenu);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposMenu = $this->GruposMenus->newEntity();
        if ($this->request->is('post')) {
            $gruposMenu = $this->GruposMenus->patchEntity($gruposMenu, $this->request->getData());
            if ($this->GruposMenus->save($gruposMenu)) {
                $this->Flash->success(__('The grupos menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos menu could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposMenus->Grupos->find('list', ['limit' => 200]);
        $menus = $this->GruposMenus->Menus->find('list', ['limit' => 200]);
        $this->set(compact('gruposMenu', 'grupos', 'menus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Menu id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposMenu = $this->GruposMenus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposMenu = $this->GruposMenus->patchEntity($gruposMenu, $this->request->getData());
            if ($this->GruposMenus->save($gruposMenu)) {
                $this->Flash->success(__('The grupos menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos menu could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposMenus->Grupos->find('list', ['limit' => 200]);
        $menus = $this->GruposMenus->Menus->find('list', ['limit' => 200]);
        $this->set(compact('gruposMenu', 'grupos', 'menus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Menu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposMenu = $this->GruposMenus->get($id);
        if ($this->GruposMenus->delete($gruposMenu)) {
            $this->Flash->success(__('The grupos menu has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
