<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RaiseStatuses Controller
 *
 * @property \App\Model\Table\RaiseStatusesTable $RaiseStatuses
 *
 * @method \App\Model\Entity\RaiseStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RaiseStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $raiseStatuses = $this->paginate($this->RaiseStatuses);

        $this->set(compact('raiseStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Raise Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raiseStatus = $this->RaiseStatuses->get($id, [
            'contain' => ['Raises']
        ]);

        $this->set('raiseStatus', $raiseStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raiseStatus = $this->RaiseStatuses->newEntity();
        if ($this->request->is('post')) {
            $raiseStatus = $this->RaiseStatuses->patchEntity($raiseStatus, $this->request->getData());
            if ($this->RaiseStatuses->save($raiseStatus)) {
                $this->Flash->success(__('The raise status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise status could not be saved. Please, try again.'));
        }
        $this->set(compact('raiseStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Raise Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raiseStatus = $this->RaiseStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raiseStatus = $this->RaiseStatuses->patchEntity($raiseStatus, $this->request->getData());
            if ($this->RaiseStatuses->save($raiseStatus)) {
                $this->Flash->success(__('The raise status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise status could not be saved. Please, try again.'));
        }
        $this->set(compact('raiseStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Raise Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $raiseStatus = $this->RaiseStatuses->get($id);
        if ($this->RaiseStatuses->delete($raiseStatus)) {
            $this->Flash->success(__('The raise status has been deleted.'));
        } else {
            $this->Flash->error(__('The raise status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
