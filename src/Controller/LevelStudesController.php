<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LevelStudes Controller
 *
 * @property \App\Model\Table\LevelStudesTable $LevelStudes
 *
 * @method \App\Model\Entity\LevelStude[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LevelStudesController extends AppController
{



/**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $levelStudes = $this->LevelStudes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($levelStudes);
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
        $levelStudes = $this->paginate($this->LevelStudes);

        $this->set(compact('levelStudes'));
    }

    /**
     * View method
     *
     * @param string|null $id Level Stude id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $levelStude = $this->LevelStudes->get($id, [
            'contain' => ['Childs', 'SchoolLevels']
        ]);

        $this->set('levelStude', $levelStude);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $levelStude = $this->LevelStudes->newEntity();
        if ($this->request->is('post')) {
            $levelStude = $this->LevelStudes->patchEntity($levelStude, $this->request->getData());
            if ($this->LevelStudes->save($levelStude)) {
                $this->Flash->success(__('The level stude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The level stude could not be saved. Please, try again.'));
        }
        $this->set(compact('levelStude'));
    }

/***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $levelStude = $this->LevelStudes->newEntity();
        if ($this->request->is('post')) {
         $levelStudeData = $this->request->getData() ;
         unset($levelStudeData["id"]) ;
         $levelStude = $this->LevelStudes->patchEntity($levelStude, $levelStudeData);         
        if ($this->LevelStudes->save($levelStude)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $levelStude->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }



    /**
     * Edit method
     *
     * @param string|null $id Level Stude id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $levelStude = $this->LevelStudes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levelStude = $this->LevelStudes->patchEntity($levelStude, $this->request->getData());
            if ($this->LevelStudes->save($levelStude)) {
                $this->Flash->success(__('The level stude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The level stude could not be saved. Please, try again.'));
        }
        $this->set(compact('levelStude'));
    }

/**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $levelStudeData = $this->request->getData() ;
        $levelStude = $this->LevelStudes->get($levelStudeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levelStude = $this->LevelStudes->patchEntity($levelStude, $levelStudeData);
            if ($this->LevelStudes->save($levelStude)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $levelStude->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }



    /**
     * Delete method
     *
     * @param string|null $id Level Stude id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $levelStude = $this->LevelStudes->get($id);
        if ($this->LevelStudes->delete($levelStude)) {
            $this->Flash->success(__('The level stude has been deleted.'));
        } else {
            $this->Flash->error(__('The level stude could not be deleted. Please, try again.'));
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
        $levelStudeData = $this->request->getData() ;
        $levelStude = $this->LevelStudes->get($levelStudeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->LevelStudes->delete($levelStude)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $levelStude->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
