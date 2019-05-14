<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compagnes Controller
 *
 * @property \App\Model\Table\CompagnesTable $Compagnes
 *
 * @method \App\Model\Entity\Compagne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompagnesController extends AppController
{

/**
     * Index method JSon
     */
public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $compagnes = $this->Compagnes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->response->type('application/json');   
            echo json_encode($compagnes);
                            }  
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $compagnes = $this->paginate($this->Compagnes);

        $this->set(compact('compagnes'));
    }

    /**
     * View method
     *
     * @param string|null $id Compagne id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compagne = $this->Compagnes->get($id, [
            'contain' => ['Departments']
        ]);

        $this->set('compagne', $compagne);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compagne = $this->Compagnes->newEntity();
        if ($this->request->is('post')) {
            $compagne = $this->Compagnes->patchEntity($compagne, $this->request->getData());
            if ($this->Compagnes->save($compagne)) {
                $this->Flash->success(__('The compagne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compagne could not be saved. Please, try again.'));
        }
        $this->set(compact('compagne'));
    }

 /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $compagne = $this->Compagnes->newEntity();
        if ($this->request->is('post')) {
         $compagneData = $this->request->getData() ;
         unset($compagneData["id"]) ;
         $compagne = $this->Compagnes->patchEntity($compagne, $compagneData);         
        if ($this->Compagnes->save($compagne)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $compagne->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }
    /**
     * Edit method
     *
     * @param string|null $id Compagne id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compagne = $this->Compagnes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compagne = $this->Compagnes->patchEntity($compagne, $this->request->getData());
            if ($this->Compagnes->save($compagne)) {
                $this->Flash->success(__('The compagne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compagne could not be saved. Please, try again.'));
        }
        $this->set(compact('compagne'));
    }
    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $compagneData = $this->request->getData() ;
        $compagne = $this->Compagnes->get($compagneData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compagne = $this->Compagnes->patchEntity($compagne, $compagneData);
            if ($this->Compagnes->save($compagne)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $compagne->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Compagne id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compagne = $this->Compagnes->get($id);
        if ($this->Compagnes->delete($compagne)) {
            $this->Flash->success(__('The compagne has been deleted.'));
        } else {
            $this->Flash->error(__('The compagne could not be deleted. Please, try again.'));
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
        $compagneData = $this->request->getData() ;
        $compagne = $this->Compagnes->get($compagneData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Compagnes->delete($compagne)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $compagne->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
