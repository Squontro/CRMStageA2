<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactOpportunities Controller
 *
 * @property \App\Model\Table\ContactOpportunitiesTable $ContactOpportunities
 *
 * @method \App\Model\Entity\ContactOpportunity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactOpportunitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Opportunities', 'Contacts']
        ];
        $contactOpportunities = $this->paginate($this->ContactOpportunities);

        $this->set(compact('contactOpportunities'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Opportunity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactOpportunity = $this->ContactOpportunities->get($id, [
            'contain' => ['Opportunities', 'Contacts']
        ]);

        $this->set('contactOpportunity', $contactOpportunity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactOpportunity = $this->ContactOpportunities->newEntity();
        if ($this->request->is('post')) {
            $contactOpportunity = $this->ContactOpportunities->patchEntity($contactOpportunity, $this->request->getData());
            if ($this->ContactOpportunities->save($contactOpportunity)) {
                $this->Flash->success(__('The contact opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact opportunity could not be saved. Please, try again.'));
        }
        $opportunities = $this->ContactOpportunities->Opportunities->find('list', ['limit' => 200]);
        $contacts = $this->ContactOpportunities->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactOpportunity', 'opportunities', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Opportunity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactOpportunity = $this->ContactOpportunities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactOpportunity = $this->ContactOpportunities->patchEntity($contactOpportunity, $this->request->getData());
            if ($this->ContactOpportunities->save($contactOpportunity)) {
                $this->Flash->success(__('The contact opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact opportunity could not be saved. Please, try again.'));
        }
        $opportunities = $this->ContactOpportunities->Opportunities->find('list', ['limit' => 200]);
        $contacts = $this->ContactOpportunities->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactOpportunity', 'opportunities', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Opportunity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactOpportunity = $this->ContactOpportunities->get($id);
        if ($this->ContactOpportunities->delete($contactOpportunity)) {
            $this->Flash->success(__('The contact opportunity has been deleted.'));
        } else {
            $this->Flash->error(__('The contact opportunity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
