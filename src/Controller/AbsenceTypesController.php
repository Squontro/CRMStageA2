<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AbsenceTypes Controller
 *
 * @property \App\Model\Table\AbsenceTypesTable $AbsenceTypes
 *
 * @method \App\Model\Entity\AbsenceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AbsenceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $absenceTypes = $this->paginate($this->AbsenceTypes);

        $this->set(compact('absenceTypes'));
    }

    public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $absenceTypes = $this->AbsenceTypes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->response->type('application/json');  
            echo json_encode($absenceTypes);
                                 }
    /**
     * View method
     *
     * @param string|null $id Absence Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $absenceType = $this->AbsenceTypes->get($id, [
            'contain' => ['AbsEmployees']
        ]);

        $this->set('absenceType', $absenceType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $absenceType = $this->AbsenceTypes->newEntity();
        if ($this->request->is('post')) {
            $absenceType = $this->AbsenceTypes->patchEntity($absenceType, $this->request->getData());
            if ($this->AbsenceTypes->save($absenceType)) {
                $this->Flash->success(__('The absence type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence type could not be saved. Please, try again.'));
        }
        $this->set(compact('absenceType'));
    }
    /***
    *Add methode JSon
    */
     function addJson(){
        $this->autoRender = false; // avoid to render view
         $absenceType = $this->AbsenceTypes->newEntity();
         if ($this->request->is('post')) {
         $absenceTypeData = json_decode(key($this->request->getData()),true);
         unset($absenceTypeData["id"]) ;
         $absenceTypeData = $this->AbsenceTypes->patchEntity($absenceType, $absenceTypeData);         
       if ($this->AbsenceTypes->save($absenceTypeData)) {
            $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $absenceType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }
    }

    /**
     * Edit method
     *
     * @param string|null $id Absence Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $absenceType = $this->AbsenceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absenceType = $this->AbsenceTypes->patchEntity($absenceType, $this->request->getData());
            if ($this->AbsenceTypes->save($absenceType)) {
                $this->Flash->success(__('The absence type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence type could not be saved. Please, try again.'));
        }
        $this->set(compact('absenceType'));
    }
    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        $absenceTypeData = json_decode(key($this->request->getData()),true);
        $absenceType = $this->AbsenceTypes->get($absenceTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absenceType = $this->AbsenceTypes->patchEntity($absenceType, $absenceTypeData);
            if ($this->AbsenceTypes->save($absenceType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $absenceType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Absence Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $absenceType = $this->AbsenceTypes->get($id);
        if ($this->AbsenceTypes->delete($absenceType)) {
            $this->Flash->success(__('The absence type has been deleted.'));
        } else {
            $this->Flash->error(__('The absence type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method JSon
     */
     public function deleteJson()
    {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        $absenceTypeData = json_decode(key($this->request->getData()),true);
        $absenceType = $this->AbsenceTypes->get($absenceTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->AbsenceTypes->delete($absenceType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $absenceType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
}
}
