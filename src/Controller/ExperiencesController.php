<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Experiences Controller
 *
 * @property \App\Model\Table\ExperiencesTable $Experiences
 *
 * @method \App\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExperiencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        

        $this->paginate = [
            'contain' => ['Employees']
        ];
        $experiences = $this->paginate($this->Experiences);

        $this->set(compact('experiences'));
    }
    /**
     * Index method JSon
     */
public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $experiences = $this->Experiences->find('all');
            $this->RequestHandler->respondAs('json');
            $this->response->type('application/json');   
            echo json_encode($experiences);
                            }  

    /**
     * View method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experience = $this->Experiences->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('experience', $experience);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experience = $this->Experiences->newEntity();
        if ($this->request->is('post')) {
            $experience = $this->Experiences->patchEntity($experience, $this->request->getData());
            if ($this->Experiences->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $employees = $this->Experiences->Employees->find('list');
        $this->set(compact('experience', 'employees'));
    }
     /***
    *Add methode JSon
    */
     function addJson(){ 
         $this->autoRender = false; // avoid to render view
         $experience = $this->Experiences->newEntity();
        if ($this->request->is('post')) {
         $experienceData= $this->request->getData() ;
         //$id=Employees ;
         //$experienceData["employee_id"]=$id ;
         unset($experienceData["id"]) ;
         $experience = $this->Experiences->patchEntity($experience, $experienceData);         
        if ($this->Experiences->save($experience)) {
        $resultJ = json_encode(array('result' => 'success'));
           $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $experience->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }  
    /**
     * Edit method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experience = $this->Experiences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experience = $this->Experiences->patchEntity($experience, $this->request->getData());
            if ($this->Experiences->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $employees = $this->Experiences->Employees->find('list', ['limit' => 200]);
        $this->set(compact('experience', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experience = $this->Experiences->get($id);
        if ($this->Experiences->delete($experience)) {
            $this->Flash->success(__('The experience has been deleted.'));
        } else {
            $this->Flash->error(__('The experience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
