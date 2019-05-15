<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProspectReasons Controller
 *
 * @property \App\Model\Table\ProspectReasonsTable $ProspectReasons
 *
 * @method \App\Model\Entity\ProspectReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectReasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $prospectReasons = $this->paginate($this->ProspectReasons);

        $this->set(compact('prospectReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospectReason = $this->ProspectReasons->get($id, [
            'contain' => ['Prospects']
        ]);

        $this->set('prospectReason', $prospectReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospectReason = $this->ProspectReasons->newEntity();
        if ($this->request->is('post')) {
            $prospectReason = $this->ProspectReasons->patchEntity($prospectReason, $this->request->getData());
            if ($this->ProspectReasons->save($prospectReason)) {
                $this->Flash->success(__('The prospect reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect reason could not be saved. Please, try again.'));
        }
        $prospects = $this->ProspectReasons->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectReason', 'prospects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospectReason = $this->ProspectReasons->get($id, [
            'contain' => ['Prospects']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospectReason = $this->ProspectReasons->patchEntity($prospectReason, $this->request->getData());
            if ($this->ProspectReasons->save($prospectReason)) {
                $this->Flash->success(__('The prospect reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect reason could not be saved. Please, try again.'));
        }
        $prospects = $this->ProspectReasons->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectReason', 'prospects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospectReason = $this->ProspectReasons->get($id);
        if ($this->ProspectReasons->delete($prospectReason)) {
            $this->Flash->success(__('The prospect reason has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
