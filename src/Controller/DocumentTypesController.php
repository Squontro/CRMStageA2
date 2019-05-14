<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentTypes Controller
 *
 * @property \App\Model\Table\DocumentTypesTable $DocumentTypes
 *
 * @method \App\Model\Entity\DocumentType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentTypesController extends AppController
{



    /**
     * Index method JSon
     */
 public function  indexJson() {
            $this->autoRender = false; // avoid to render view
           $documentTypes = $this->DocumentTypes->find('all');
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($documentTypes);
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
        $documentTypes = $this->paginate($this->DocumentTypes);

        $this->set(compact('documentTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Document Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentType = $this->DocumentTypes->get($id, [
            'contain' => ['EmpDocuments']
        ]);

        $this->set('documentType', $documentType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentType = $this->DocumentTypes->newEntity();
        if ($this->request->is('post')) {
            $documentType = $this->DocumentTypes->patchEntity($documentType, $this->request->getData());
            if ($this->DocumentTypes->save($documentType)) {
                $this->Flash->success(__('The document type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document type could not be saved. Please, try again.'));
        }
        $this->set(compact('documentType'));
    }

      /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $documentType = $this->DocumentTypes->newEntity();
        if ($this->request->is('post')) {
         $documentTypeData = $this->request->getData() ;
         unset($documentTypeData["id"]) ;
         $documentType = $this->DocumentTypes->patchEntity($documentType, $documentTypeData);         
        if ($this->DocumentTypes->save($documentType)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $documentType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
        }
    }

    

    /**
     * Edit method
     *
     * @param string|null $id Document Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentType = $this->DocumentTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentType = $this->DocumentTypes->patchEntity($documentType, $this->request->getData());
            if ($this->DocumentTypes->save($documentType)) {
                $this->Flash->success(__('The document type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document type could not be saved. Please, try again.'));
        }
        $this->set(compact('documentType'));
    }

   /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        $documentTypeData = $this->request->getData() ;
        $documentType = $this->DocumentTypes->get($documentTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentType = $this->DocumentTypes->patchEntity($documentType, $documentTypeData);
            if ($this->DocumentTypes->save($documentType)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $documentType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }




    /**
     * Delete method
     *
     * @param string|null $id Document Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentType = $this->DocumentTypes->get($id);
        if ($this->DocumentTypes->delete($documentType)) {
            $this->Flash->success(__('The document type has been deleted.'));
        } else {
            $this->Flash->error(__('The document type could not be deleted. Please, try again.'));
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
        $documentTypeData = $this->request->getData() ;
        $documentType = $this->DocumentTypes->get($documentTypeData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->DocumentTypes->delete($documentType)) {
            $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
            $resultJ = json_encode(array('result' => 'error', 'errors' => $documentType->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
}
