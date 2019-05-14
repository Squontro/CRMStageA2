<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProspectStatuses Controller
 *
 * @property \App\Model\Table\ProspectStatusesTable $ProspectStatuses
 *
 * @method \App\Model\Entity\ProspectStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $prospectStatuses = $this->paginate($this->ProspectStatuses);

        $this->set(compact('prospectStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospectStatus = $this->ProspectStatuses->get($id, [
            'contain' => []
        ]);

        $this->set('prospectStatus', $prospectStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospectStatus = $this->ProspectStatuses->newEntity();
        if ($this->request->is('post')) {
            $prospectStatus = $this->ProspectStatuses->patchEntity($prospectStatus, $this->request->getData());
            if ($this->ProspectStatuses->save($prospectStatus)) {
                $this->Flash->success(__('The prospect status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect status could not be saved. Please, try again.'));
        }
        $this->set(compact('prospectStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospectStatus = $this->ProspectStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospectStatus = $this->ProspectStatuses->patchEntity($prospectStatus, $this->request->getData());
            if ($this->ProspectStatuses->save($prospectStatus)) {
                $this->Flash->success(__('The prospect status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect status could not be saved. Please, try again.'));
        }
        $this->set(compact('prospectStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospectStatus = $this->ProspectStatuses->get($id);
        if ($this->ProspectStatuses->delete($prospectStatus)) {
            $this->Flash->success(__('The prospect status has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
