<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactReasonsContacts Controller
 *
 * @property \App\Model\Table\ContactReasonsContactsTable $ContactReasonsContacts
 *
 * @method \App\Model\Entity\ContactReasonsContact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactReasonsContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContactReasons', 'Contacts']
        ];
        $contactReasonsContacts = $this->paginate($this->ContactReasonsContacts);

        $this->set(compact('contactReasonsContacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Reasons Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactReasonsContact = $this->ContactReasonsContacts->get($id, [
            'contain' => ['ContactReasons', 'Contacts']
        ]);

        $this->set('contactReasonsContact', $contactReasonsContact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactReasonsContact = $this->ContactReasonsContacts->newEntity();
        if ($this->request->is('post')) {
            $contactReasonsContact = $this->ContactReasonsContacts->patchEntity($contactReasonsContact, $this->request->getData());
            if ($this->ContactReasonsContacts->save($contactReasonsContact)) {
                $this->Flash->success(__('The contact reasons contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact reasons contact could not be saved. Please, try again.'));
        }
        $contactReasons = $this->ContactReasonsContacts->ContactReasons->find('list', ['limit' => 200]);
        $contacts = $this->ContactReasonsContacts->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactReasonsContact', 'contactReasons', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Reasons Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactReasonsContact = $this->ContactReasonsContacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactReasonsContact = $this->ContactReasonsContacts->patchEntity($contactReasonsContact, $this->request->getData());
            if ($this->ContactReasonsContacts->save($contactReasonsContact)) {
                $this->Flash->success(__('The contact reasons contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact reasons contact could not be saved. Please, try again.'));
        }
        $contactReasons = $this->ContactReasonsContacts->ContactReasons->find('list', ['limit' => 200]);
        $contacts = $this->ContactReasonsContacts->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactReasonsContact', 'contactReasons', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Reasons Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactReasonsContact = $this->ContactReasonsContacts->get($id);
        if ($this->ContactReasonsContacts->delete($contactReasonsContact)) {
            $this->Flash->success(__('The contact reasons contact has been deleted.'));
        } else {
            $this->Flash->error(__('The contact reasons contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
