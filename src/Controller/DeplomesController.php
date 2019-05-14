<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deplomes Controller
 *
 * @property \App\Model\Table\DeplomesTable $Deplomes
 *
 * @method \App\Model\Entity\Deplome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeplomesController extends AppController
{

 /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $deplomes = $this->Deplomes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($deplomes);
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
        $deplomes = $this->paginate($this->Deplomes);

        $this->set(compact('deplomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Deplome id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deplome = $this->Deplomes->get($id, [
            'contain' => ['EmpDeplomes']
        ]);

        $this->set('deplome', $deplome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deplome = $this->Deplomes->newEntity();
        if ($this->request->is('post')) {
            $deplome = $this->Deplomes->patchEntity($deplome, $this->request->getData());
            if ($this->Deplomes->save($deplome)) {
                $this->Flash->success(__('The deplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deplome could not be saved. Please, try again.'));
        }
        $this->set(compact('deplome'));
    }
    /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $deplome = $this->Deplomes->newEntity();
        if ($this->request->is('post')) {
         $deplomeData = $this->request->getData() ;
         unset($deplomeData["id"]) ;
         $deplome = $this->Deplomes->patchEntity($deplome, $deplomeData);         
        if ($this->Deplomes->save($deplome)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $deplome->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Deplome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deplome = $this->Deplomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deplome = $this->Deplomes->patchEntity($deplome, $this->request->getData());
            if ($this->Deplomes->save($deplome)) {
                $this->Flash->success(__('The deplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deplome could not be saved. Please, try again.'));
        }
        $this->set(compact('deplome'));
    }


    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $deplomeData = $this->request->getData() ;
        $deplome = $this->Deplomes->get($deplomeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deplome = $this->Deplomes->patchEntity($deplome, $deplomeData);
            if ($this->Deplomes->save($deplome)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $deplome->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }


    /**
     * Delete method
     *
     * @param string|null $id Deplome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deplome = $this->Deplomes->get($id);
        if ($this->Deplomes->delete($deplome)) {
            $this->Flash->success(__('The deplome has been deleted.'));
        } else {
            $this->Flash->error(__('The deplome could not be deleted. Please, try again.'));
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
        $deplomeData = $this->request->getData() ;
        $deplome = $this->Deplomes->get($deplomeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Deplomes->delete($deplome)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $deplome->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
