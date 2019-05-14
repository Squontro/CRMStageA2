<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeesDocuments Controller
 *
 * @property \App\Model\Table\EmployeesDocumentsTable $EmployeesDocuments
 *
 * @method \App\Model\Entity\EmployeesDocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'DocumentTypes']
        ];
        $employeesDocuments = $this->paginate($this->EmployeesDocuments);

        $this->set(compact('employeesDocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesDocument = $this->EmployeesDocuments->get($id, [
            'contain' => ['Employees', 'DocumentTypes']
        ]);

        $this->set('employeesDocument', $employeesDocument);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesDocument = $this->EmployeesDocuments->newEntity();
        if ($this->request->is('post')) {
            $employeesDocument = $this->EmployeesDocuments->patchEntity($employeesDocument, $this->request->getData());
            if ($this->EmployeesDocuments->save($employeesDocument)) {
                $this->Flash->success(__('The employees document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees document could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesDocuments->Employees->find('list', ['limit' => 200]);
        $documentTypes = $this->EmployeesDocuments->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('employeesDocument', 'employees', 'documentTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesDocument = $this->EmployeesDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesDocument = $this->EmployeesDocuments->patchEntity($employeesDocument, $this->request->getData());
            if ($this->EmployeesDocuments->save($employeesDocument)) {
                $this->Flash->success(__('The employees document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees document could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesDocuments->Employees->find('list', ['limit' => 200]);
        $documentTypes = $this->EmployeesDocuments->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('employeesDocument', 'employees', 'documentTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesDocument = $this->EmployeesDocuments->get($id);
        if ($this->EmployeesDocuments->delete($employeesDocument)) {
            $this->Flash->success(__('The employees document has been deleted.'));
        } else {
            $this->Flash->error(__('The employees document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
