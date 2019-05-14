<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * JobTypes Controller
 *
 * @property \App\Model\Table\JobTypesTable $JobTypes
 *
 * @method \App\Model\Entity\JobType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobTypesController extends AppController
{


    /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $jobTypes = $this->JobTypes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($jobTypes);
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
        $jobTypes = $this->paginate($this->JobTypes);

        $this->set(compact('jobTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Job Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobType = $this->JobTypes->get($id, [
            'contain' => ['Jobs']
        ]);

        $this->set('jobType', $jobType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobType = $this->JobTypes->newEntity();
        if ($this->request->is('post')) {
            $jobType = $this->JobTypes->patchEntity($jobType, $this->request->getData());
            if ($this->JobTypes->save($jobType)) {
                $this->Flash->success(__('The job type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job type could not be saved. Please, try again.'));
        }
        $this->set(compact('jobType'));
    }
   
   /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $jobType = $this->JobTypes->newEntity();
        if ($this->request->is('post')) {
         $jobTypeData = $this->request->getData() ;
         unset($jobTypeData["id"]) ;
         $levelStude = $this->JobTypes->patchEntity($jobType, $jobTypeData);         
        if ($this->JobTypes->save($jobType)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $jobType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }



    /**
     * Edit method
     *
     * @param string|null $id Job Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobType = $this->JobTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobType = $this->JobTypes->patchEntity($jobType, $this->request->getData());
            if ($this->JobTypes->save($jobType)) {
                $this->Flash->success(__('The job type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job type could not be saved. Please, try again.'));
        }
        $this->set(compact('jobType'));
    }

   /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $jobTypeData = $this->request->getData() ;
        $jobType = $this->JobTypes->get($jobTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobType = $this->JobTypes->patchEntity($jobType, $jobTypeData);
            if ($this->JobTypes->save($jobType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $jobType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }



    /**
     * Delete method
     *
     * @param string|null $id Job Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobType = $this->JobTypes->get($id);
        if ($this->JobTypes->delete($jobType)) {
            $this->Flash->success(__('The job type has been deleted.'));
        } else {
            $this->Flash->error(__('The job type could not be deleted. Please, try again.'));
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
        $jobTypeData = $this->request->getData() ;
        $jobType = $this->JobTypes->get($jobTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->JobTypes->delete($jobType)) {
            $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
            $resultJ = json_encode(array('result' => 'error', 'errors' => $jobType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }



}
