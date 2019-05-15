<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpportunitiesProducts Controller
 *
 * @property \App\Model\Table\OpportunitiesProductsTable $OpportunitiesProducts
 *
 * @method \App\Model\Entity\OpportunitiesProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunitiesProductsController extends AppController
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
        $opportunitiesProducts = $this->paginate($this->OpportunitiesProducts);

        $this->set(compact('opportunitiesProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunities Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunitiesProduct = $this->OpportunitiesProducts->get($id, [
            'contain' => ['Opportunities', 'Products']
        ]);

        $this->set('opportunitiesProduct', $opportunitiesProduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunitiesProduct = $this->OpportunitiesProducts->newEntity();
        if ($this->request->is('post')) {
            $opportunitiesProduct = $this->OpportunitiesProducts->patchEntity($opportunitiesProduct, $this->request->getData());
            if ($this->OpportunitiesProducts->save($opportunitiesProduct)) {
                $this->Flash->success(__('The opportunities product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunities product could not be saved. Please, try again.'));
        }
        $opportunities = $this->OpportunitiesProducts->Opportunities->find('list', ['limit' => 200]);
        $products = $this->OpportunitiesProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunitiesProduct', 'opportunities', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunities Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunitiesProduct = $this->OpportunitiesProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunitiesProduct = $this->OpportunitiesProducts->patchEntity($opportunitiesProduct, $this->request->getData());
            if ($this->OpportunitiesProducts->save($opportunitiesProduct)) {
                $this->Flash->success(__('The opportunities product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunities product could not be saved. Please, try again.'));
        }
        $opportunities = $this->OpportunitiesProducts->Opportunities->find('list', ['limit' => 200]);
        $products = $this->OpportunitiesProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('opportunitiesProduct', 'opportunities', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunities Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunitiesProduct = $this->OpportunitiesProducts->get($id);
        if ($this->OpportunitiesProducts->delete($opportunitiesProduct)) {
            $this->Flash->success(__('The opportunities product has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunities product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
