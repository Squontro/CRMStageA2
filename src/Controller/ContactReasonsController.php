<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactReasons Controller
 *
 * @property \App\Model\Table\ContactReasonsTable $ContactReasons
 *
 * @method \App\Model\Entity\ContactReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactReasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contactReasons = $this->paginate($this->ContactReasons);

        $this->set(compact('contactReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactReason = $this->ContactReasons->get($id, [
            'contain' => ['Contacts']
        ]);

        $this->set('contactReason', $contactReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactReason = $this->ContactReasons->newEntity();
        if ($this->request->is('post')) {
            $contactReason = $this->ContactReasons->patchEntity($contactReason, $this->request->getData());
            if ($this->ContactReasons->save($contactReason)) {
                $this->Flash->success(__('The contact reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact reason could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactReasons->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactReason', 'contacts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactReason = $this->ContactReasons->get($id, [
            'contain' => ['Contacts']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactReason = $this->ContactReasons->patchEntity($contactReason, $this->request->getData());
            if ($this->ContactReasons->save($contactReason)) {
                $this->Flash->success(__('The contact reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact reason could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactReasons->Contacts->find('list', ['limit' => 200]);
        $this->set(compact('contactReason', 'contacts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactReason = $this->ContactReasons->get($id);
        if ($this->ContactReasons->delete($contactReason)) {
            $this->Flash->success(__('The contact reason has been deleted.'));
        } else {
            $this->Flash->error(__('The contact reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
