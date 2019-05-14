<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolLevels Controller
 *
 * @property \App\Model\Table\SchoolLevelsTable $SchoolLevels
 *
 * @method \App\Model\Entity\SchoolLevel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchoolLevelsController extends AppController
{

  /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $schoolLevels = $this->SchoolLevels->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($schoolLevels);
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
            'contain' => ['LevelStudes']
        ];
        $schoolLevels = $this->paginate($this->SchoolLevels);

        $this->set(compact('schoolLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id School Level id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolLevel = $this->SchoolLevels->get($id, [
            'contain' => ['LevelStudes', 'Employees']
        ]);

        $this->set('schoolLevel', $schoolLevel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolLevel = $this->SchoolLevels->newEntity();
        if ($this->request->is('post')) {
            $schoolLevel = $this->SchoolLevels->patchEntity($schoolLevel, $this->request->getData());
            if ($this->SchoolLevels->save($schoolLevel)) {
                $this->Flash->success(__('The school level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school level could not be saved. Please, try again.'));
        }
        $levelStudes = $this->SchoolLevels->LevelStudes->find('list', ['limit' => 200]);
        $this->set(compact('schoolLevel', 'levelStudes'));
    }


   /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $schoolLevel = $this->SchoolLevels->newEntity();
        if ($this->request->is('post')) {
         $schoolLevelData = $this->request->getData() ;
         unset($schoolLevelData["id"]) ;
         $schoolLevel = $this->SchoolLevels->patchEntity($schoolLevel, $schoolLevelData);         
        if ($this->SchoolLevels->save($schoolLevel)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $schoolLevel->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }



    /**
     * Edit method
     *
     * @param string|null $id School Level id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolLevel = $this->SchoolLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolLevel = $this->SchoolLevels->patchEntity($schoolLevel, $this->request->getData());
            if ($this->SchoolLevels->save($schoolLevel)) {
                $this->Flash->success(__('The school level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school level could not be saved. Please, try again.'));
        }
        $levelStudes = $this->SchoolLevels->LevelStudes->find('list', ['limit' => 200]);
        $this->set(compact('schoolLevel', 'levelStudes'));
    }

    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $schoolLevelData = $this->request->getData() ;
        $schoolLevel = $this->SchoolLevels->get($schoolLevelData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolLevel = $this->SchoolLevels->patchEntity($schoolLevel, $schoolLevelData);
            if ($this->SchoolLevels->save($schoolLevel)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $schoolLevel->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }


    /**
     * Delete method
     *
     * @param string|null $id School Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolLevel = $this->SchoolLevels->get($id);
        if ($this->SchoolLevels->delete($schoolLevel)) {
            $this->Flash->success(__('The school level has been deleted.'));
        } else {
            $this->Flash->error(__('The school level could not be deleted. Please, try again.'));
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
        $schoolLevelData = $this->request->getData() ;
        $schoolLevel = $this->SchoolLevels->get($schoolLevelData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->SchoolLevels->delete($schoolLevel)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $schoolLevel->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
