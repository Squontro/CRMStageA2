<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactsOpportunities Controller
 *
 * @property \App\Model\Table\ContactsOpportunitiesTable $ContactsOpportunities
 *
 * @method \App\Model\Entity\ContactsOpportunity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsOpportunitiesController extends AppController
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
        $contactsOpportunities = $this->paginate($this->ContactsOpportunities);

        $this->set(compact('contactsOpportunities'));
    }

    /**
     * View method
     *
     * @param string|null $id Contacts Opportunity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactsOpportunity = $this->ContactsOpportunities->get($id, [
            'contain' => ['Opportunities', 'Contacts']
        ]);

        $this->set('contactsOpportunity', $contactsOpportunity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactsOpportunity = $this->ContactsOpportunities->newEntity();
        if ($this->request->is('post')) {
            $contactsOpportunity = $this->ContactsOpportunities->patchEntity($contactsOpportunity, $this->request->getData());
            if ($this->ContactsOpportunities->save($contactsOpportunity)) {
                $this->Flash->success(__('The contacts opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts opportunity could not be saved. Please, try again.'));
        }
        $opportunities = $this->ContactsOpportunities->Opportunities->find('list', ['limit' => 200]);
        $contacts = $this->ContactsOpportunities->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactsOpportunity', 'opportunities', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacts Opportunity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactsOpportunity = $this->ContactsOpportunities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactsOpportunity = $this->ContactsOpportunities->patchEntity($contactsOpportunity, $this->request->getData());
            if ($this->ContactsOpportunities->save($contactsOpportunity)) {
                $this->Flash->success(__('The contacts opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts opportunity could not be saved. Please, try again.'));
        }
        $opportunities = $this->ContactsOpportunities->Opportunities->find('list', ['limit' => 200]);
        $contacts = $this->ContactsOpportunities->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactsOpportunity', 'opportunities', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacts Opportunity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactsOpportunity = $this->ContactsOpportunities->get($id);
        if ($this->ContactsOpportunities->delete($contactsOpportunity)) {
            $this->Flash->success(__('The contacts opportunity has been deleted.'));
        } else {
            $this->Flash->error(__('The contacts opportunity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
