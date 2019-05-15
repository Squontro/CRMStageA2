<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeeCategories Controller
 *
 * @property \App\Model\Table\EmployeeCategoriesTable $EmployeeCategories
 *
 * @method \App\Model\Entity\EmployeeCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $employeeCategories = $this->paginate($this->EmployeeCategories);

        $this->set(compact('employeeCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeCategory = $this->EmployeeCategories->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('employeeCategory', $employeeCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeCategory = $this->EmployeeCategories->newEntity();
        if ($this->request->is('post')) {
            $employeeCategory = $this->EmployeeCategories->patchEntity($employeeCategory, $this->request->getData());
            if ($this->EmployeeCategories->save($employeeCategory)) {
                $this->Flash->success(__('The employee category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee category could not be saved. Please, try again.'));
        }
        $this->set(compact('employeeCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeCategory = $this->EmployeeCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeCategory = $this->EmployeeCategories->patchEntity($employeeCategory, $this->request->getData());
            if ($this->EmployeeCategories->save($employeeCategory)) {
                $this->Flash->success(__('The employee category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee category could not be saved. Please, try again.'));
        }
        $this->set(compact('employeeCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeCategory = $this->EmployeeCategories->get($id);
        if ($this->EmployeeCategories->delete($employeeCategory)) {
            $this->Flash->success(__('The employee category has been deleted.'));
        } else {
            $this->Flash->error(__('The employee category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
