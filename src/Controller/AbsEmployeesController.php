<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AbsEmployees Controller
 *
 * @property \App\Model\Table\AbsEmployeesTable $AbsEmployees
 *
 * @method \App\Model\Entity\AbsEmployee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AbsEmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AbsenceTypes', 'Employees']
        ];
        $absEmployees = $this->paginate($this->AbsEmployees);

        $this->set(compact('absEmployees'));
    }

    /**
     * View method
     *
     * @param string|null $id Abs Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $absEmployee = $this->AbsEmployees->get($id, [
            'contain' => ['AbsenceTypes', 'Employees']
        ]);

        $this->set('absEmployee', $absEmployee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $absEmployee = $this->AbsEmployees->newEntity();
        if ($this->request->is('post')) {
            $absEmployee = $this->AbsEmployees->patchEntity($absEmployee, $this->request->getData());
            if ($this->AbsEmployees->save($absEmployee)) {
                $this->Flash->success(__('The abs employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abs employee could not be saved. Please, try again.'));
        }
        $absenceTypes = $this->AbsEmployees->AbsenceTypes->find('list', ['limit' => 200]);
        $employees = $this->AbsEmployees->Employees->find('list', ['limit' => 200]);
        $this->set(compact('absEmployee', 'absenceTypes', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Abs Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $absEmployee = $this->AbsEmployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absEmployee = $this->AbsEmployees->patchEntity($absEmployee, $this->request->getData());
            if ($this->AbsEmployees->save($absEmployee)) {
                $this->Flash->success(__('The abs employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abs employee could not be saved. Please, try again.'));
        }
        $absenceTypes = $this->AbsEmployees->AbsenceTypes->find('list', ['limit' => 200]);
        $employees = $this->AbsEmployees->Employees->find('list', ['limit' => 200]);
        $this->set(compact('absEmployee', 'absenceTypes', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Abs Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $absEmployee = $this->AbsEmployees->get($id);
        if ($this->AbsEmployees->delete($absEmployee)) {
            $this->Flash->success(__('The abs employee has been deleted.'));
        } else {
            $this->Flash->error(__('The abs employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
