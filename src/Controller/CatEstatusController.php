<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CatEstatus Controller
 *
 * @property \App\Model\Table\CatEstatusTable $CatEstatus
 *
 * @method \App\Model\Entity\CatEstatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatEstatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $catEstatus = $this->paginate($this->CatEstatus);

        $this->set(compact('catEstatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Cat Estatus id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catEstatus = $this->CatEstatus->get($id, [
            'contain' => [],
        ]);

        $this->set('catEstatus', $catEstatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catEstatus = $this->CatEstatus->newEntity();
        if ($this->request->is('post')) {
            $catEstatus = $this->CatEstatus->patchEntity($catEstatus, $this->request->getData());
            if ($this->CatEstatus->save($catEstatus)) {
                $this->Flash->success(__('The cat estatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat estatus could not be saved. Please, try again.'));
        }
        $this->set(compact('catEstatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Estatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catEstatus = $this->CatEstatus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catEstatus = $this->CatEstatus->patchEntity($catEstatus, $this->request->getData());
            if ($this->CatEstatus->save($catEstatus)) {
                $this->Flash->success(__('The cat estatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat estatus could not be saved. Please, try again.'));
        }
        $this->set(compact('catEstatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Estatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catEstatus = $this->CatEstatus->get($id);
        $catEstatus->activo = 0;
        if ($this->CatEstatus->save($catEstatus)) {
            $this->Flash->success(__('The cat estatus has been deleted.'));
        } else {
            $this->Flash->error(__('The cat estatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
