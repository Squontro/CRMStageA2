<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactCategories Controller
 *
 * @property \App\Model\Table\ContactCategoriesTable $ContactCategories
 *
 * @method \App\Model\Entity\ContactCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contactCategories = $this->paginate($this->ContactCategories);

        $this->set(compact('contactCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactCategory = $this->ContactCategories->get($id, [
            'contain' => []
        ]);

        $this->set('contactCategory', $contactCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactCategory = $this->ContactCategories->newEntity();
        if ($this->request->is('post')) {
            $contactCategory = $this->ContactCategories->patchEntity($contactCategory, $this->request->getData());
            if ($this->ContactCategories->save($contactCategory)) {
                $this->Flash->success(__('The contact category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact category could not be saved. Please, try again.'));
        }
        $this->set(compact('contactCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactCategory = $this->ContactCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactCategory = $this->ContactCategories->patchEntity($contactCategory, $this->request->getData());
            if ($this->ContactCategories->save($contactCategory)) {
                $this->Flash->success(__('The contact category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact category could not be saved. Please, try again.'));
        }
        $this->set(compact('contactCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactCategory = $this->ContactCategories->get($id);
        if ($this->ContactCategories->delete($contactCategory)) {
            $this->Flash->success(__('The contact category has been deleted.'));
        } else {
            $this->Flash->error(__('The contact category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
