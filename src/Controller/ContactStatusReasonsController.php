<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactStatusReasons Controller
 *
 * @property \App\Model\Table\ContactStatusReasonsTable $ContactStatusReasons
 *
 * @method \App\Model\Entity\ContactStatusReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactStatusReasonsController extends AppController
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
        $contactStatusReasons = $this->paginate($this->ContactStatusReasons);

        $this->set(compact('contactStatusReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Status Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactStatusReason = $this->ContactStatusReasons->get($id, [
            'contain' => ['ContactReasons', 'Contacts']
        ]);

        $this->set('contactStatusReason', $contactStatusReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactStatusReason = $this->ContactStatusReasons->newEntity();
        if ($this->request->is('post')) {
            $contactStatusReason = $this->ContactStatusReasons->patchEntity($contactStatusReason, $this->request->getData());
            if ($this->ContactStatusReasons->save($contactStatusReason)) {
                $this->Flash->success(__('The contact status reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact status reason could not be saved. Please, try again.'));
        }
        $contactReasons = $this->ContactStatusReasons->ContactReasons->find('list', ['limit' => 200]);
        $contacts = $this->ContactStatusReasons->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactStatusReason', 'contactReasons', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Status Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactStatusReason = $this->ContactStatusReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactStatusReason = $this->ContactStatusReasons->patchEntity($contactStatusReason, $this->request->getData());
            if ($this->ContactStatusReasons->save($contactStatusReason)) {
                $this->Flash->success(__('The contact status reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact status reason could not be saved. Please, try again.'));
        }
        $contactReasons = $this->ContactStatusReasons->ContactReasons->find('list', ['limit' => 200]);
        $contacts = $this->ContactStatusReasons->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactStatusReason', 'contactReasons', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Status Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactStatusReason = $this->ContactStatusReasons->get($id);
        if ($this->ContactStatusReasons->delete($contactStatusReason)) {
            $this->Flash->success(__('The contact status reason has been deleted.'));
        } else {
            $this->Flash->error(__('The contact status reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
