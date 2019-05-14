<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunityProducts Controller
 *
 * @property \App\Model\Table\OpportunityProductsTable $OpportunityProducts
 *
 * @method \App\Model\Entity\OpportunityProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunityProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Opportunities', 'Products']
        ];
        $opportunityProducts = $this->paginate($this->OpportunityProducts);

        $this->set(compact('opportunityProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunityProduct = $this->OpportunityProducts->get($id, [
            'contain' => ['Opportunities', 'Products']
        ]);

        $this->set('opportunityProduct', $opportunityProduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityProduct = $this->OpportunityProducts->newEntity();
        if ($this->request->is('post')) {
            $opportunityProduct = $this->OpportunityProducts->patchEntity($opportunityProduct, $this->request->getData());
            if ($this->OpportunityProducts->save($opportunityProduct)) {
                $this->Flash->success(__('The opportunity product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity product could not be saved. Please, try again.'));
        }
        $opportunities = $this->OpportunityProducts->Opportunities->find('list', ['limit' => 200]);
        $products = $this->OpportunityProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunityProduct', 'opportunities', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityProduct = $this->OpportunityProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityProduct = $this->OpportunityProducts->patchEntity($opportunityProduct, $this->request->getData());
            if ($this->OpportunityProducts->save($opportunityProduct)) {
                $this->Flash->success(__('The opportunity product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity product could not be saved. Please, try again.'));
        }
        $opportunities = $this->OpportunityProducts->Opportunities->find('list', ['limit' => 200]);
        $products = $this->OpportunityProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunityProduct', 'opportunities', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityProduct = $this->OpportunityProducts->get($id);
        if ($this->OpportunityProducts->delete($opportunityProduct)) {
            $this->Flash->success(__('The opportunity product has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
