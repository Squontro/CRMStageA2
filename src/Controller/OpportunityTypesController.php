<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunityTypes Controller
 *
 * @property \App\Model\Table\OpportunityTypesTable $OpportunityTypes
 *
 * @method \App\Model\Entity\OpportunityType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunityTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $opportunityTypes = $this->paginate($this->OpportunityTypes);

        $this->set(compact('opportunityTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunityType = $this->OpportunityTypes->get($id, [
            'contain' => ['Opportunities']
        ]);

        $this->set('opportunityType', $opportunityType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityType = $this->OpportunityTypes->newEntity();
        if ($this->request->is('post')) {
            $opportunityType = $this->OpportunityTypes->patchEntity($opportunityType, $this->request->getData());
            if ($this->OpportunityTypes->save($opportunityType)) {
                $this->Flash->success(__('The opportunity type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity type could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityType = $this->OpportunityTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityType = $this->OpportunityTypes->patchEntity($opportunityType, $this->request->getData());
            if ($this->OpportunityTypes->save($opportunityType)) {
                $this->Flash->success(__('The opportunity type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity type could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunityType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityType = $this->OpportunityTypes->get($id);
        if ($this->OpportunityTypes->delete($opportunityType)) {
            $this->Flash->success(__('The opportunity type has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
