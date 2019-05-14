<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 *
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsController extends AppController
{


/**
     * Index method JSon
     */
public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $departments = $this->Departments->find('all');
            $this->RequestHandler->respondAs('json');
            $this->response->type('application/json');   
            echo json_encode($departments);
                            }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Compagnes']
        ];
        $departments = $this->paginate($this->Departments);

        $this->set(compact('departments'));
    }

    /**
     * View method
     *
     * @param string|null $id Department id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $department = $this->Departments->get($id, [
            'contain' => ['Compagnes', 'Services']
        ]);

        $this->set('department', $department);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $department = $this->Departments->newEntity();
        if ($this->request->is('post')) {
            $department = $this->Departments->patchEntity($department, $this->request->getData());
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $compagnes = $this->Departments->Compagnes->find('list', ['limit' => 200]);
        $this->set(compact('department', 'compagnes'));
    }
    /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $department = $this->Departments->newEntity();
         if ($this->request->is('post')) {
         $departmentData = $this->request->getData() ;
         unset($departmentData["id"]) ;
         $department = $this->Departments->patchEntity($department, $departmentData);         
        if ($this->Departments->save($department)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $department->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }
    }

    /**
     * Edit method
     *
     * @param string|null $id Department id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $department = $this->Departments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $department = $this->Departments->patchEntity($department, $this->request->getData());
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $compagnes = $this->Departments->Compagnes->find('list', ['limit' => 200]);
        $this->set(compact('department', 'compagnes'));
    }
   
    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $departmentData = $this->request->getData() ;
        $department = $this->Departments->get($departmentData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $department = $this->Departments->patchEntity($department, $departmentData);
            if ($this->Departments->save($department)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $department->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
 


    /**
     * Delete method
     *
     * @param string|null $id Department id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $department = $this->Departments->get($id);
        if ($this->Departments->delete($department)) {
            $this->Flash->success(__('The department has been deleted.'));
        } else {
            $this->Flash->error(__('The department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * Delete method JSon
     */
     public function deleteJson()
    {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        $departmentData = $this->request->getData() ;
        $department = $this->Departments->get($departmentData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Departments->delete($department)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $department->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
