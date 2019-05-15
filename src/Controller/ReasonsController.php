<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reasons Controller
 *
 * @property \App\Model\Table\ReasonsTable $Reasons
 *
 * @method \App\Model\Entity\Reason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReasonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $reasons = $this->paginate($this->Reasons);
        $this->set(compact('reasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reason = $this->Reasons->get($id, [
            'contain' => ['OpportunityReasons']
        ]);

        $this->set('reason', $reason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reason = $this->Reasons->newEntity();
        if ($this->request->is('post')) {
            $reason = $this->Reasons->patchEntity($reason, $this->request->getData());
            if ($this->Reasons->save($reason)) {
                $this->Flash->success(__('The reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reason could not be saved. Please, try again.'));
        }
        $this->set(compact('reason'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reason = $this->Reasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reason = $this->Reasons->patchEntity($reason, $this->request->getData());
            if ($this->Reasons->save($reason)) {
                $this->Flash->success(__('The reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reason could not be saved. Please, try again.'));
        }
        $this->set(compact('reason'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reason = $this->Reasons->get($id);
        if ($this->Reasons->delete($reason)) {
            $this->Flash->success(__('The reason has been deleted.'));
        } else {
            $this->Flash->error(__('The reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
