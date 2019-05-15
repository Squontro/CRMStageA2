<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentsEmployees Controller
 *
 * @property \App\Model\Table\DocumentsEmployeesTable $DocumentsEmployees
 *
 * @method \App\Model\Entity\DocumentsEmployee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsEmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Documents', 'Employees']
        ];
        $documentsEmployees = $this->paginate($this->DocumentsEmployees);

        $this->set(compact('documentsEmployees'));
    }

    /**
     * View method
     *
     * @param string|null $id Documents Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsEmployee = $this->DocumentsEmployees->get($id, [
            'contain' => ['Documents', 'Employees']
        ]);

        $this->set('documentsEmployee', $documentsEmployee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsEmployee = $this->DocumentsEmployees->newEntity();
        if ($this->request->is('post')) {
            $documentsEmployee = $this->DocumentsEmployees->patchEntity($documentsEmployee, $this->request->getData());
            if ($this->DocumentsEmployees->save($documentsEmployee)) {
                $this->Flash->success(__('The documents employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents employee could not be saved. Please, try again.'));
        }
        $documents = $this->DocumentsEmployees->Documents->find('list', ['limit' => 200]);
        $employees = $this->DocumentsEmployees->Employees->find('list', ['limit' => 200]);
        $this->set(compact('documentsEmployee', 'documents', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documents Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsEmployee = $this->DocumentsEmployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsEmployee = $this->DocumentsEmployees->patchEntity($documentsEmployee, $this->request->getData());
            if ($this->DocumentsEmployees->save($documentsEmployee)) {
                $this->Flash->success(__('The documents employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents employee could not be saved. Please, try again.'));
        }
        $documents = $this->DocumentsEmployees->Documents->find('list', ['limit' => 200]);
        $employees = $this->DocumentsEmployees->Employees->find('list', ['limit' => 200]);
        $this->set(compact('documentsEmployee', 'documents', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documents Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsEmployee = $this->DocumentsEmployees->get($id);
        if ($this->DocumentsEmployees->delete($documentsEmployee)) {
            $this->Flash->success(__('The documents employee has been deleted.'));
        } else {
            $this->Flash->error(__('The documents employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
