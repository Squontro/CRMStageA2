<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opportunities Controller
 *
 * @property \App\Model\Table\OpportunitiesTable $Opportunities
 *
 * @method \App\Model\Entity\Opportunity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OpportunityStatuses', 'OpportunityTypes', 'Users']
        ];
        $opportunities = $this->paginate($this->Opportunities);

        $this->set(compact('opportunities'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunity = $this->Opportunities->get($id, [
            'contain' => ['OpportunityStatuses', 'OpportunityTypes', 'Users', 'Contacts', 'OpportunityReasons', 'Products', 'Raises']
        ]);

        $this->set('opportunity', $opportunity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunity = $this->Opportunities->newEntity();
        if ($this->request->is('post')) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->getData());
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('The opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity could not be saved. Please, try again.'));
        }
        $opportunityStatuses = $this->Opportunities->OpportunityStatuses->find('list', ['limit' => 200]);
        $opportunityTypes = $this->Opportunities->OpportunityTypes->find('list', ['limit' => 200]);
        $users = $this->Opportunities->Users->find('list', ['limit' => 200]);
        $contacts = $this->Opportunities->Contacts->find('list', ['limit' => 200]);
        $opportunityReasons = $this->Opportunities->OpportunityReasons->find('list', ['limit' => 200]);
        $products = $this->Opportunities->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunity', 'opportunityStatuses', 'opportunityTypes', 'users', 'contacts', 'opportunityReasons', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunity = $this->Opportunities->get($id, [
            'contain' => ['Contacts', 'OpportunityReasons', 'Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->getData());
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('The opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity could not be saved. Please, try again.'));
        }
        $opportunityStatuses = $this->Opportunities->OpportunityStatuses->find('list', ['limit' => 200]);
        $opportunityTypes = $this->Opportunities->OpportunityTypes->find('list', ['limit' => 200]);
        $users = $this->Opportunities->Users->find('list', ['limit' => 200]);
        $contacts = $this->Opportunities->Contacts->find('list', ['limit' => 200]);
        $opportunityReasons = $this->Opportunities->OpportunityReasons->find('list', ['limit' => 200]);
        $products = $this->Opportunities->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunity', 'opportunityStatuses', 'opportunityTypes', 'users', 'contacts', 'opportunityReasons', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunity = $this->Opportunities->get($id);
        if ($this->Opportunities->delete($opportunity)) {
            $this->Flash->success(__('The opportunity has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
