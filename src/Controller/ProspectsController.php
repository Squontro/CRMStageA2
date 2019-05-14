<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prospects Controller
 *
 * @property \App\Model\Table\ProspectsTable $Prospects
 *
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Sources', 'ProspectStatuses']
        ];
        $prospects = $this->paginate($this->Prospects);

        $this->set(compact('prospects'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospect = $this->Prospects->get($id, [
            'contain' => ['Users', 'Sources', 'ProspectStatuses', 'ProspectStatusesReasons']
        ]);

        $this->set('prospect', $prospect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospect = $this->Prospects->newEntity();
        if ($this->request->is('post')) {
            $prospect = $this->Prospects->patchEntity($prospect, $this->request->getData());
            if ($this->Prospects->save($prospect)) {
                $this->Flash->success(__('The prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect could not be saved. Please, try again.'));
        }
        $source = $this->Prospects->Sources->newEntity();
        $users = $this->Prospects->Users->find('list', ['limit' => 200]);
        $sources = $this->Prospects->Sources->find('list', ['limit' => 200]);
        $prospectStatuses = $this->Prospects->ProspectStatuses->find('list', ['limit' => 200]);
        $this->set(compact('prospect', 'users', 'sources', 'prospectStatuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospect = $this->Prospects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospect = $this->Prospects->patchEntity($prospect, $this->request->getData());
            if ($this->Prospects->save($prospect)) {
                $this->Flash->success(__('The prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect could not be saved. Please, try again.'));
        }
        $users = $this->Prospects->Users->find('list', ['limit' => 200]);
        $sources = $this->Prospects->Sources->find('list', ['limit' => 200]);
        $prospectStatuses = $this->Prospects->ProspectStatuses->find('list', ['limit' => 200]);
        $this->set(compact('prospect', 'users', 'sources', 'prospectStatuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospect = $this->Prospects->get($id);
        if ($this->Prospects->delete($prospect)) {
            $this->Flash->success(__('The prospect has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function transform($id = null){
        return $this->redirect(['controller' => 'Contacts', 'action' => 'add', $id]);
    }

    public function refresh(){
        $users = $this->Prospects->Users->find('list', ['limit' => 200]);
        $sources = $this->Prospects->Sources->find('list', ['limit' => 200]);
        $prospectStatuses = $this->Prospects->ProspectStatuses->find('list', ['limit' => 200]);
        $this->set(compact('users', 'sources', 'prospectStatuses'));
    }

}
