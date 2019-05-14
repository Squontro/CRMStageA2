<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompanyCategories Controller
 *
 * @property \App\Model\Table\CompanyCategoriesTable $CompanyCategories
 *
 * @method \App\Model\Entity\CompanyCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $companyCategories = $this->paginate($this->CompanyCategories);

        $this->set(compact('companyCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Company Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyCategory = $this->CompanyCategories->get($id, [
            'contain' => ['Companies']
        ]);

        $this->set('companyCategory', $companyCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyCategory = $this->CompanyCategories->newEntity();
        if ($this->request->is('post')) {
            $companyCategory = $this->CompanyCategories->patchEntity($companyCategory, $this->request->getData());
            if ($this->CompanyCategories->save($companyCategory)) {
                $this->Flash->success(__('The company category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company category could not be saved. Please, try again.'));
        }
        $this->set(compact('companyCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyCategory = $this->CompanyCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyCategory = $this->CompanyCategories->patchEntity($companyCategory, $this->request->getData());
            if ($this->CompanyCategories->save($companyCategory)) {
                $this->Flash->success(__('The company category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company category could not be saved. Please, try again.'));
        }
        $this->set(compact('companyCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyCategory = $this->CompanyCategories->get($id);
        if ($this->CompanyCategories->delete($companyCategory)) {
            $this->Flash->success(__('The company category has been deleted.'));
        } else {
            $this->Flash->error(__('The company category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
