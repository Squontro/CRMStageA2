<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactStatuses Controller
 *
 * @property \App\Model\Table\ContactStatusesTable $ContactStatuses
 *
 * @method \App\Model\Entity\ContactStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contactStatuses = $this->paginate($this->ContactStatuses);

        $this->set(compact('contactStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactStatus = $this->ContactStatuses->get($id, [
            'contain' => ['Contacts']
        ]);

        $this->set('contactStatus', $contactStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactStatus = $this->ContactStatuses->newEntity();
        if ($this->request->is('post')) {
            $contactStatus = $this->ContactStatuses->patchEntity($contactStatus, $this->request->getData());
            if ($this->ContactStatuses->save($contactStatus)) {
                $this->Flash->success(__('The contact status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact status could not be saved. Please, try again.'));
        }
        $this->set(compact('contactStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactStatus = $this->ContactStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactStatus = $this->ContactStatuses->patchEntity($contactStatus, $this->request->getData());
            if ($this->ContactStatuses->save($contactStatus)) {
                $this->Flash->success(__('The contact status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact status could not be saved. Please, try again.'));
        }
        $this->set(compact('contactStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactStatus = $this->ContactStatuses->get($id);
        if ($this->ContactStatuses->delete($contactStatus)) {
            $this->Flash->success(__('The contact status has been deleted.'));
        } else {
            $this->Flash->error(__('The contact status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
