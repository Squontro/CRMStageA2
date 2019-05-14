<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LeaveTypes Controller
 *
 * @property \App\Model\Table\LeaveTypesTable $LeaveTypes
 *
 * @method \App\Model\Entity\LeaveType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeaveTypesController extends AppController
{


    /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $leaveTypes = $this->LeaveTypes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($leaveTypes);
            $this->response->body($content);
           $this->response->type('json');
            return $this->response;
                                }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $leaveTypes = $this->paginate($this->LeaveTypes);

        $this->set(compact('leaveTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Leave Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leaveType = $this->LeaveTypes->get($id, [
            'contain' => ['Leaves']
        ]);

        $this->set('leaveType', $leaveType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leaveType = $this->LeaveTypes->newEntity();
        if ($this->request->is('post')) {
            $leaveType = $this->LeaveTypes->patchEntity($leaveType, $this->request->getData());
            if ($this->LeaveTypes->save($leaveType)) {
                $this->Flash->success(__('The leave type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave type could not be saved. Please, try again.'));
        }
        $this->set(compact('leaveType'));
    }

    /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $leaveType = $this->LeaveTypes->newEntity();
        if ($this->request->is('post')) {
         $leaveTypeData = $this->request->getData() ;
         unset($leaveTypeData["id"]) ;
         $leaveType = $this->LeaveTypes->patchEntity($leaveType, $leaveTypeData);         
        if ($this->LeaveTypes->save($leaveType)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $leaveType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }


    /**
     * Edit method
     *
     * @param string|null $id Leave Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leaveType = $this->LeaveTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaveType = $this->LeaveTypes->patchEntity($leaveType, $this->request->getData());
            if ($this->LeaveTypes->save($leaveType)) {
                $this->Flash->success(__('The leave type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave type could not be saved. Please, try again.'));
        }
        $this->set(compact('leaveType'));
    }

    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $leaveTypeData = $this->request->getData() ;
        $leaveType = $this->LeaveTypes->get($leaveTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaveType = $this->LeaveTypes->patchEntity($leaveType, $leaveTypeData);
            if ($this->LeaveTypes->save($leaveType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $leaveType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
    /**
     * Delete method
     *
     * @param string|null $id Leave Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leaveType = $this->LeaveTypes->get($id);
        if ($this->LeaveTypes->delete($leaveType)) {
            $this->Flash->success(__('The leave type has been deleted.'));
        } else {
            $this->Flash->error(__('The leave type could not be deleted. Please, try again.'));
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
        $leaveTypeData = $this->request->getData() ;
        $leaveType = $this->LeaveTypes->get($leaveTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->LeaveTypes->delete($leaveType)) {
            $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
            $resultJ = json_encode(array('result' => 'error', 'errors' => $leaveType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }

}
