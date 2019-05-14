<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Towns Controller
 *
 * @property \App\Model\Table\TownsTable $Towns
 *
 * @method \App\Model\Entity\Town[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TownsController extends AppController
{


    /**
     * Index method JSon
     */
    public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $towns = $this->Towns->find('all' ,  array('fields' => array('Towns.id' ,'Towns.code','Towns.daira_id','Towns.name')));
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($towns);
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
        $this->paginate = [
            'contain' => ['Dairas']
        ];
        $towns = $this->paginate($this->Towns);

        $this->set(compact('towns'));
    }

    /**
     * View method
     *
     * @param string|null $id Town id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $town = $this->Towns->get($id, [
            'contain' => ['Dairas', 'Employees']
        ]);

        $this->set('town', $town);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $town = $this->Towns->newEntity();
        if ($this->request->is('post')) {
            $town = $this->Towns->patchEntity($town, $this->request->getData());
            if ($this->Towns->save($town)) {
                $this->Flash->success(__('The town has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The town could not be saved. Please, try again.'));
        }
        $dairas = $this->Towns->Dairas->find('list', ['limit' => 200]);
        $this->set(compact('town', 'dairas'));
    }


   /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $town = $this->Towns->newEntity();
        if ($this->request->is('post')) {
         $townData = $this->request->getData() ;
         unset($townData["id"]) ;
         $town = $this->Towns->patchEntity($town, $townData);         
        if ($this->Towns->save($town)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $town->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }


    /**
     * Edit method
     *
     * @param string|null $id Town id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $town = $this->Towns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $town = $this->Towns->patchEntity($town, $this->request->getData());
            if ($this->Towns->save($town)) {
                $this->Flash->success(__('The town has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The town could not be saved. Please, try again.'));
        }
        $dairas = $this->Towns->Dairas->find('list', ['limit' => 200]);
        $this->set(compact('town', 'dairas'));
    }
/**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        $townData = $this->request->getData() ;
        $town = $this->Towns->get($townData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $town = $this->Towns->patchEntity($town, $townData);
            if ($this->Towns->save($town)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $town->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }




    /**
     * Delete method
     *
     * @param string|null $id Town id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $town = $this->Towns->get($id);
        if ($this->Towns->delete($town)) {
            $this->Flash->success(__('The town has been deleted.'));
        } else {
            $this->Flash->error(__('The town could not be deleted. Please, try again.'));
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
        $townData = $this->request->getData() ;
        $town = $this->Towns->get($townData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Towns->delete($town)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $town->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
