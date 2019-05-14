<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Raises Controller
 *
 * @property \App\Model\Table\RaisesTable $Raises
 *
 * @method \App\Model\Entity\Raise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RaisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RaiseTypes', 'RaiseStatuses', 'Opportunities']
        ];
        $raises = $this->paginate($this->Raises);

        $this->set(compact('raises'));
    }

    /**
     * View method
     *
     * @param string|null $id Raise id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raise = $this->Raises->get($id, [
            'contain' => ['RaiseTypes', 'RaiseStatuses', 'Opportunities']
        ]);

        $this->set('raise', $raise);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raise = $this->Raises->newEntity();
        if ($this->request->is('post')) {
            $raise = $this->Raises->patchEntity($raise, $this->request->getData());
            if ($this->Raises->save($raise)) {
                $this->Flash->success(__('The raise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise could not be saved. Please, try again.'));
        }
        $raiseTypes = $this->Raises->RaiseTypes->find('list', ['limit' => 200]);
        $raiseStatuses = $this->Raises->RaiseStatuses->find('list', ['limit' => 200]);
        $opportunities = $this->Raises->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('raise', 'raiseTypes', 'raiseStatuses', 'opportunities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Raise id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raise = $this->Raises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raise = $this->Raises->patchEntity($raise, $this->request->getData());
            if ($this->Raises->save($raise)) {
                $this->Flash->success(__('The raise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise could not be saved. Please, try again.'));
        }
        $raiseTypes = $this->Raises->RaiseTypes->find('list', ['limit' => 200]);
        $raiseStatuses = $this->Raises->RaiseStatuses->find('list', ['limit' => 200]);
        $opportunities = $this->Raises->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('raise', 'raiseTypes', 'raiseStatuses', 'opportunities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Raise id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $raise = $this->Raises->get($id);
        if ($this->Raises->delete($raise)) {
            $this->Flash->success(__('The raise has been deleted.'));
        } else {
            $this->Flash->error(__('The raise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
