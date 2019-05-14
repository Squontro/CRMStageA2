<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationCategories Controller
 *
 * @property \App\Model\Table\OrganizationCategoriesTable $OrganizationCategories
 *
 * @method \App\Model\Entity\OrganizationCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $organizationCategories = $this->paginate($this->OrganizationCategories);

        $this->set(compact('organizationCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationCategory = $this->OrganizationCategories->get($id, [
            'contain' => ['Organizations']
        ]);

        $this->set('organizationCategory', $organizationCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationCategory = $this->OrganizationCategories->newEntity();
        if ($this->request->is('post')) {
            $organizationCategory = $this->OrganizationCategories->patchEntity($organizationCategory, $this->request->getData());
            if ($this->OrganizationCategories->save($organizationCategory)) {
                $this->Flash->success(__('The organization category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization category could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationCategory = $this->OrganizationCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationCategory = $this->OrganizationCategories->patchEntity($organizationCategory, $this->request->getData());
            if ($this->OrganizationCategories->save($organizationCategory)) {
                $this->Flash->success(__('The organization category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization category could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationCategory = $this->OrganizationCategories->get($id);
        if ($this->OrganizationCategories->delete($organizationCategory)) {
            $this->Flash->success(__('The organization category has been deleted.'));
        } else {
            $this->Flash->error(__('The organization category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
