<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dairas Controller
 *
 * @property \App\Model\Table\DairasTable $Dairas
 *
 * @method \App\Model\Entity\Daira[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DairasController extends AppController
{


    /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $dairas = $this->Dairas->find('all' ,  array('fields' => array('Dairas.id' ,'Dairas.code','Dairas.wilaya_id','Dairas.name')));
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($dairas);
            $this->response->body($content);
           $this->response->type('json');
            return $this->response;
                                }
    /**

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wilayas']
        ];
        $dairas = $this->paginate($this->Dairas);

        $this->set(compact('dairas'));
    }

    /**
     * View method
     *
     * @param string|null $id Daira id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $daira = $this->Dairas->get($id, [
            'contain' => ['Wilayas', 'Towns']
        ]);

        $this->set('daira', $daira);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $daira = $this->Dairas->newEntity();
        if ($this->request->is('post')) {
            $daira = $this->Dairas->patchEntity($daira, $this->request->getData());
            if ($this->Dairas->save($daira)) {
                $this->Flash->success(__('The daira has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daira could not be saved. Please, try again.'));
        }
        $wilayas = $this->Dairas->Wilayas->find('list', ['limit' => 200]);
        $this->set(compact('daira', 'wilayas'));
    }
 /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
        $daira = $this->Dairas->newEntity();
        if ($this->request->is('post')) {
         $dairaData = $this->request->getData() ;
         unset($dairaData["id"]) ;
         $daira = $this->Dairas->patchEntity($daira, $dairaData);         
        if ($this->Dairas->save($daira)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $daira->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }
    /**
     * Edit method
     *
     * @param string|null $id Daira id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $daira = $this->Dairas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $daira = $this->Dairas->patchEntity($daira, $this->request->getData());
            if ($this->Dairas->save($daira)) {
                $this->Flash->success(__('The daira has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The daira could not be saved. Please, try again.'));
        }
        $wilayas = $this->Dairas->Wilayas->find('list', ['limit' => 200]);
        $this->set(compact('daira', 'wilayas'));
    }


    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $dairaData = $this->request->getData() ;
        $daira = $this->Dairas->get($dairaData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $daira = $this->Dairas->patchEntity($daira, $dairaData);
            if ($this->Dairas->save($daira)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $daira->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Daira id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $daira = $this->Dairas->get($id);
        if ($this->Dairas->delete($daira)) {
            $this->Flash->success(__('The daira has been deleted.'));
        } else {
            $this->Flash->error(__('The daira could not be deleted. Please, try again.'));
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
        $dairaData = $this->request->getData() ;
        $daira = $this->Dairas->get($dairaData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Dairas->delete($daira)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $daira->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
