<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunityStatuses Controller
 *
 * @property \App\Model\Table\OpportunityStatusesTable $OpportunityStatuses
 *
 * @method \App\Model\Entity\OpportunityStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunityStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $opportunityStatuses = $this->paginate($this->OpportunityStatuses);

        $this->set(compact('opportunityStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunityStatus = $this->OpportunityStatuses->get($id, [
            'contain' => ['Opportunities']
        ]);

        $this->set('opportunityStatus', $opportunityStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityStatus = $this->OpportunityStatuses->newEntity();
        if ($this->request->is('post')) {
            $opportunityStatus = $this->OpportunityStatuses->patchEntity($opportunityStatus, $this->request->getData());
            if ($this->OpportunityStatuses->save($opportunityStatus)) {
                $this->Flash->success(__('The opportunity status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity status could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityStatus = $this->OpportunityStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityStatus = $this->OpportunityStatuses->patchEntity($opportunityStatus, $this->request->getData());
            if ($this->OpportunityStatuses->save($opportunityStatus)) {
                $this->Flash->success(__('The opportunity status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity status could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityStatus = $this->OpportunityStatuses->get($id);
        if ($this->OpportunityStatuses->delete($opportunityStatus)) {
            $this->Flash->success(__('The opportunity status has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
