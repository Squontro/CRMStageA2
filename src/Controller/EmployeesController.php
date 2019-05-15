<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'Services', 'EmployeeCategories', 'Roles', 'BloodGroups']
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }


    /**
     * Index method Json for JsGrid
     * @return \Cake\Http\Response
     */
    public function  indexJson() {
        $this->autoRender = false; // avoid to render view
        $content = $this->Employees->find('all' ,  array('fields' => array('Countries.id' ,'Countries.name')));
        $this->RequestHandler->respondAs('json');
        $this->autoRender = false;
        $content = json_encode($content);
        $this->response->body($content);
        $this->response->type('json');
        return $this->response;
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Departments', 'Services', 'EmployeeCategories', 'Roles', 'BloodGroups', 'Documents', 'Skills', 'Users']
        ]);

        $this->set('employee', $employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $services = $this->Employees->Services->find('list', ['limit' => 200]);
        $employeeCategories = $this->Employees->EmployeeCategories->find('list', ['limit' => 200]);
        $roles = $this->Employees->Roles->find('list', ['limit' => 200]);
        $bloodGroups = $this->Employees->BloodGroups->find('list', ['limit' => 200]);
        $documents = $this->Employees->Documents->find('list', ['limit' => 200]);
        $skills = $this->Employees->Skills->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'departments', 'services', 'employeeCategories', 'roles', 'bloodGroups', 'documents', 'skills'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Documents', 'Skills']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $services = $this->Employees->Services->find('list', ['limit' => 200]);
        $employeeCategories = $this->Employees->EmployeeCategories->find('list', ['limit' => 200]);
        $roles = $this->Employees->Roles->find('list', ['limit' => 200]);
        $bloodGroups = $this->Employees->BloodGroups->find('list', ['limit' => 200]);
        $documents = $this->Employees->Documents->find('list', ['limit' => 200]);
        $skills = $this->Employees->Skills->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'departments', 'services', 'employeeCategories', 'roles', 'bloodGroups', 'documents', 'skills'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
