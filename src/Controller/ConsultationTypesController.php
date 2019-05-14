<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsultationTypes Controller
 *
 * @property \App\Model\Table\ConsultationTypesTable $ConsultationTypes
 *
 * @method \App\Model\Entity\ConsultationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultationTypesController extends AppController
{    
 /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $consultationTypes = $this->ConsultationTypes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($consultationTypes);
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
        $consultationTypes = $this->paginate($this->ConsultationTypes);

        $this->set(compact('consultationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultationType = $this->ConsultationTypes->get($id, [
            'contain' => ['Consultations']
        ]);

        $this->set('consultationType', $consultationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultationType = $this->ConsultationTypes->newEntity();
        if ($this->request->is('post')) {
            $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $this->request->getData());
            if ($this->ConsultationTypes->save($consultationType)) {
                $this->Flash->success(__('The consultation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultation type could not be saved. Please, try again.'));
        }
        $this->set(compact('consultationType'));
    }
    /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $consultationType = $this->ConsultationTypes->newEntity();
        if ($this->request->is('post')) {
         $consultationTypeData = $this->request->getData() ;
         unset($consultationTypeData["id"]) ;
         $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $consultationTypeData);         
        if ($this->ConsultationTypes->save($consultationType)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $consultationType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }


    /**
     * Edit method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultationType = $this->ConsultationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $this->request->getData());
            if ($this->ConsultationTypes->save($consultationType)) {
                $this->Flash->success(__('The consultation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultation type could not be saved. Please, try again.'));
        }
        $this->set(compact('consultationType'));
    }

    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $consultationTypeData = $this->request->getData() ;
        $consultationType = $this->ConsultationTypes->get($consultationTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $consultationTypeData);
            if ($this->ConsultationTypes->save($consultationType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $consultationType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultationType = $this->ConsultationTypes->get($id);
        if ($this->ConsultationTypes->delete($consultationType)) {
            $this->Flash->success(__('The consultation type has been deleted.'));
        } else {
            $this->Flash->error(__('The consultation type could not be deleted. Please, try again.'));
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
        $consultationTypeData = $this->request->getData() ;
        $consultationType = $this->ConsultationTypes->get($consultationTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->ConsultationTypes->delete($consultationType)) {
            $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
            $resultJ = json_encode(array('result' => 'error', 'errors' => $consultationType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
