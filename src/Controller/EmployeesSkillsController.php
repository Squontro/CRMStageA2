<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeesSkills Controller
 *
 * @property \App\Model\Table\EmployeesSkillsTable $EmployeesSkills
 *
 * @method \App\Model\Entity\EmployeesSkill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesSkillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Skills']
        ];
        $employeesSkills = $this->paginate($this->EmployeesSkills);

        $this->set(compact('employeesSkills'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Skill id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesSkill = $this->EmployeesSkills->get($id, [
            'contain' => ['Employees', 'Skills']
        ]);

        $this->set('employeesSkill', $employeesSkill);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesSkill = $this->EmployeesSkills->newEntity();
        if ($this->request->is('post')) {
            $employeesSkill = $this->EmployeesSkills->patchEntity($employeesSkill, $this->request->getData());
            if ($this->EmployeesSkills->save($employeesSkill)) {
                $this->Flash->success(__('The employees skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees skill could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesSkills->Employees->find('list', ['limit' => 200]);
        $skills = $this->EmployeesSkills->Skills->find('list', ['limit' => 200]);
        $this->set(compact('employeesSkill', 'employees', 'skills'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Skill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesSkill = $this->EmployeesSkills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesSkill = $this->EmployeesSkills->patchEntity($employeesSkill, $this->request->getData());
            if ($this->EmployeesSkills->save($employeesSkill)) {
                $this->Flash->success(__('The employees skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees skill could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesSkills->Employees->find('list', ['limit' => 200]);
        $skills = $this->EmployeesSkills->Skills->find('list', ['limit' => 200]);
        $this->set(compact('employeesSkill', 'employees', 'skills'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Skill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesSkill = $this->EmployeesSkills->get($id);
        if ($this->EmployeesSkills->delete($employeesSkill)) {
            $this->Flash->success(__('The employees skill has been deleted.'));
        } else {
            $this->Flash->error(__('The employees skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
