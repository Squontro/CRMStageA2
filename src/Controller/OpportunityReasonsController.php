<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunityReasons Controller
 *
 * @property \App\Model\Table\OpportunityReasonsTable $OpportunityReasons
 *
 * @method \App\Model\Entity\OpportunityReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunityReasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $opportunityReasons = $this->paginate($this->OpportunityReasons);

        $this->set(compact('opportunityReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunityReason = $this->OpportunityReasons->get($id, [
            'contain' => []
        ]);

        $this->set('opportunityReason', $opportunityReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityReason = $this->OpportunityReasons->newEntity();
        if ($this->request->is('post')) {
            $opportunityReason = $this->OpportunityReasons->patchEntity($opportunityReason, $this->request->getData());
            if ($this->OpportunityReasons->save($opportunityReason)) {
                $this->Flash->success(__('The opportunity reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity reason could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityReason'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityReason = $this->OpportunityReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityReason = $this->OpportunityReasons->patchEntity($opportunityReason, $this->request->getData());
            if ($this->OpportunityReasons->save($opportunityReason)) {
                $this->Flash->success(__('The opportunity reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity reason could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityReason'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityReason = $this->OpportunityReasons->get($id);
        if ($this->OpportunityReasons->delete($opportunityReason)) {
            $this->Flash->success(__('The opportunity reason has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
