<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeesDeplomes Controller
 *
 * @property \App\Model\Table\EmployeesDeplomesTable $EmployeesDeplomes
 *
 * @method \App\Model\Entity\EmployeesDeplome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesDeplomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Deplomes']
        ];
        $employeesDeplomes = $this->paginate($this->EmployeesDeplomes);

        $this->set(compact('employeesDeplomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Deplome id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesDeplome = $this->EmployeesDeplomes->get($id, [
            'contain' => ['Employees', 'Deplomes']
        ]);

        $this->set('employeesDeplome', $employeesDeplome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesDeplome = $this->EmployeesDeplomes->newEntity();
        if ($this->request->is('post')) {
            $employeesDeplome = $this->EmployeesDeplomes->patchEntity($employeesDeplome, $this->request->getData());
            if ($this->EmployeesDeplomes->save($employeesDeplome)) {
                $this->Flash->success(__('The employees deplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees deplome could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesDeplomes->Employees->find('list', ['limit' => 200]);
        $deplomes = $this->EmployeesDeplomes->Deplomes->find('list', ['limit' => 200]);
        $this->set(compact('employeesDeplome', 'employees', 'deplomes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Deplome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesDeplome = $this->EmployeesDeplomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesDeplome = $this->EmployeesDeplomes->patchEntity($employeesDeplome, $this->request->getData());
            if ($this->EmployeesDeplomes->save($employeesDeplome)) {
                $this->Flash->success(__('The employees deplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees deplome could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesDeplomes->Employees->find('list', ['limit' => 200]);
        $deplomes = $this->EmployeesDeplomes->Deplomes->find('list', ['limit' => 200]);
        $this->set(compact('employeesDeplome', 'employees', 'deplomes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Deplome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesDeplome = $this->EmployeesDeplomes->get($id);
        if ($this->EmployeesDeplomes->delete($employeesDeplome)) {
            $this->Flash->success(__('The employees deplome has been deleted.'));
        } else {
            $this->Flash->error(__('The employees deplome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
