<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunitiesOpportunityReasons Controller
 *
 * @property \App\Model\Table\OpportunitiesOpportunityReasonsTable $OpportunitiesOpportunityReasons
 *
 * @method \App\Model\Entity\OpportunitiesOpportunityReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunitiesOpportunityReasonsController extends AppController
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
        $opportunitiesOpportunityReasons = $this->paginate($this->OpportunitiesOpportunityReasons);

        $this->set(compact('opportunitiesOpportunityReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunities Opportunity Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->get($id, [
            'contain' => ['OpportunityReasons', 'Opportunities']
        ]);

        $this->set('opportunitiesOpportunityReason', $opportunitiesOpportunityReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->newEntity();
        if ($this->request->is('post')) {
            $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->patchEntity($opportunitiesOpportunityReason, $this->request->getData());
            if ($this->OpportunitiesOpportunityReasons->save($opportunitiesOpportunityReason)) {
                $this->Flash->success(__('The opportunities opportunity reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunities opportunity reason could not be saved. Please, try again.'));
        }
        $opportunityReasons = $this->OpportunitiesOpportunityReasons->OpportunityReasons->find('list', ['limit' => 200]);
        $opportunities = $this->OpportunitiesOpportunityReasons->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunitiesOpportunityReason', 'opportunityReasons', 'opportunities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunities Opportunity Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->patchEntity($opportunitiesOpportunityReason, $this->request->getData());
            if ($this->OpportunitiesOpportunityReasons->save($opportunitiesOpportunityReason)) {
                $this->Flash->success(__('The opportunities opportunity reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunities opportunity reason could not be saved. Please, try again.'));
        }
        $opportunityReasons = $this->OpportunitiesOpportunityReasons->OpportunityReasons->find('list', ['limit' => 200]);
        $opportunities = $this->OpportunitiesOpportunityReasons->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunitiesOpportunityReason', 'opportunityReasons', 'opportunities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunities Opportunity Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunitiesOpportunityReason = $this->OpportunitiesOpportunityReasons->get($id);
        if ($this->OpportunitiesOpportunityReasons->delete($opportunitiesOpportunityReason)) {
            $this->Flash->success(__('The opportunities opportunity reason has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunities opportunity reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
