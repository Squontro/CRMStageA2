<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProspectStatusesReasons Controller
 *
 * @property \App\Model\Table\ProspectStatusesReasonsTable $ProspectStatusesReasons
 *
 * @method \App\Model\Entity\ProspectStatusesReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectStatusesReasonsController extends AppController
{
    

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProspectReasons', 'Prospects']
        ];
        $prospectStatusesReasons = $this->paginate($this->ProspectStatusesReasons);

        $this->set(compact('prospectStatusesReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect Statuses Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospectStatusesReason = $this->ProspectStatusesReasons->get($id, [
            'contain' => ['ProspectReasons', 'Prospects']
        ]);

        $this->set('prospectStatusesReason', $prospectStatusesReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospectStatusesReason = $this->ProspectStatusesReasons->newEntity();
        if ($this->request->is('post')) {
            $prospectStatusesReason = $this->ProspectStatusesReasons->patchEntity($prospectStatusesReason, $this->request->getData());
            if ($this->ProspectStatusesReasons->save($prospectStatusesReason)) {
                $this->Flash->success(__('The prospect statuses reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect statuses reason could not be saved. Please, try again.'));
        }
        $prospectReasons = $this->ProspectStatusesReasons->ProspectReasons->find('list', ['limit' => 200]);
        $prospects = $this->ProspectStatusesReasons->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectStatusesReason', 'prospectReasons', 'prospects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect Statuses Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospectStatusesReason = $this->ProspectStatusesReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospectStatusesReason = $this->ProspectStatusesReasons->patchEntity($prospectStatusesReason, $this->request->getData());
            if ($this->ProspectStatusesReasons->save($prospectStatusesReason)) {
                $this->Flash->success(__('The prospect statuses reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect statuses reason could not be saved. Please, try again.'));
        }
        $prospectReasons = $this->ProspectStatusesReasons->ProspectReasons->find('list', ['limit' => 200]);
        $prospects = $this->ProspectStatusesReasons->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectStatusesReason', 'prospectReasons', 'prospects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect Statuses Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospectStatusesReason = $this->ProspectStatusesReasons->get($id);
        if ($this->ProspectStatusesReasons->delete($prospectStatusesReason)) {
            $this->Flash->success(__('The prospect statuses reason has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect statuses reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
