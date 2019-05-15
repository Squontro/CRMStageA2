<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContactCategories', 'Sources', 'Towns', 'Users', 'Organizations', 'ContactStatuses']
        ];
        $contacts = $this->paginate($this->Contacts);

        $this->set(compact('contacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => ['ContactCategories', 'Sources', 'Towns', 'Users', 'Organizations', 'ContactStatuses', 'ContactReasons', 'Opportunities']
        ]);

        $this->set('contact', $contact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $contactCategories = $this->Contacts->ContactCategories->find('list', ['limit' => 200]);
        $sources = $this->Contacts->Sources->find('list', ['limit' => 200]);
        $towns = $this->Contacts->Towns->find('list', ['limit' => 200]);
        $users = $this->Contacts->Users->find('list', ['limit' => 200]);
        $organizations = $this->Contacts->Organizations->find('list', ['limit' => 200]);
        $contactStatuses = $this->Contacts->ContactStatuses->find('list', ['limit' => 200]);
        $contactReasons = $this->Contacts->ContactReasons->find('list', ['limit' => 200]);
        $opportunities = $this->Contacts->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'contactCategories', 'sources', 'towns', 'users', 'organizations', 'contactStatuses', 'contactReasons', 'opportunities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => ['ContactReasons', 'Opportunities']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $contactCategories = $this->Contacts->ContactCategories->find('list', ['limit' => 200]);
        $sources = $this->Contacts->Sources->find('list', ['limit' => 200]);
        $towns = $this->Contacts->Towns->find('list', ['limit' => 200]);
        $users = $this->Contacts->Users->find('list', ['limit' => 200]);
        $organizations = $this->Contacts->Organizations->find('list', ['limit' => 200]);
        $contactStatuses = $this->Contacts->ContactStatuses->find('list', ['limit' => 200]);
        $contactReasons = $this->Contacts->ContactReasons->find('list', ['limit' => 200]);
        $opportunities = $this->Contacts->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'contactCategories', 'sources', 'towns', 'users', 'organizations', 'contactStatuses', 'contactReasons', 'opportunities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success(__('The contact has been deleted.'));
        } else {
            $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
