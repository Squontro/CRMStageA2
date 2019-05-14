<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunityStatusesReasons Controller
 *
 * @property \App\Model\Table\OpportunityStatusesReasonsTable $OpportunityStatusesReasons
 *
 * @method \App\Model\Entity\OpportunityStatusesReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunityStatusesReasonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OpportunityReasons', 'Opportunities']
        ];
        $opportunityStatusesReasons = $this->paginate($this->OpportunityStatusesReasons);

        $this->set(compact('opportunityStatusesReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity Statuses Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunityStatusesReason = $this->OpportunityStatusesReasons->get($id, [
            'contain' => ['OpportunityReasons', 'Opportunities']
        ]);

        $this->set('opportunityStatusesReason', $opportunityStatusesReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityStatusesReason = $this->OpportunityStatusesReasons->newEntity();
        if ($this->request->is('post')) {
            $opportunityStatusesReason = $this->OpportunityStatusesReasons->patchEntity($opportunityStatusesReason, $this->request->getData());
            if ($this->OpportunityStatusesReasons->save($opportunityStatusesReason)) {
                $this->Flash->success(__('The opportunity statuses reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity statuses reason could not be saved. Please, try again.'));
        }
        $opportunityReasons = $this->OpportunityStatusesReasons->OpportunityReasons->find('list', ['limit' => 200]);
        $opportunities = $this->OpportunityStatusesReasons->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunityStatusesReason', 'opportunityReasons', 'opportunities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Statuses Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityStatusesReason = $this->OpportunityStatusesReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityStatusesReason = $this->OpportunityStatusesReasons->patchEntity($opportunityStatusesReason, $this->request->getData());
            if ($this->OpportunityStatusesReasons->save($opportunityStatusesReason)) {
                $this->Flash->success(__('The opportunity statuses reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity statuses reason could not be saved. Please, try again.'));
        }
        $opportunityReasons = $this->OpportunityStatusesReasons->OpportunityReasons->find('list', ['limit' => 200]);
        $opportunities = $this->OpportunityStatusesReasons->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunityStatusesReason', 'opportunityReasons', 'opportunities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Statuses Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityStatusesReason = $this->OpportunityStatusesReasons->get($id);
        if ($this->OpportunityStatusesReasons->delete($opportunityStatusesReason)) {
            $this->Flash->success(__('The opportunity statuses reason has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity statuses reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
