<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wilayas Controller
 *
 * @property \App\Model\Table\WilayasTable $Wilayas
 *
 * @method \App\Model\Entity\Wilaya[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WilayasController extends AppController
{
    /**
     * Index method JSon
     */
    public function  indexJson() {
        $this->autoRender = false; // avoid to render view
        $wilayas = $this->Wilayas->find('all' ,  array('fields' => array('Wilayas.id' ,'Wilayas.country_id','Wilayas.name')));
        $this->RequestHandler->respondAs('json');
        $this->autoRender = false;
        $content = json_encode($wilayas);
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
        $wilayas = $this->paginate($this->Wilayas);

        $this->set(compact('wilayas'));
    }

    /**
     * View method
     *
     * @param string|null $id Wilaya id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wilaya = $this->Wilayas->get($id, [
            'contain' => ['Dairas']
        ]);

        $this->set('wilaya', $wilaya);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wilaya = $this->Wilayas->newEntity();
        if ($this->request->is('post')) {
            $wilaya = $this->Wilayas->patchEntity($wilaya, $this->request->getData());
            if ($this->Wilayas->save($wilaya)) {
                $this->Flash->success(__('The wilaya has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wilaya could not be saved. Please, try again.'));
        }
        $this->set(compact('wilaya'));
    }


    /***
     *Add methode JSon
     */
    function addJson(){
        $this->autoRender = false; // avoid to render view
        $wilaya = $this->Wilayas->newEntity();
        if ($this->request->is('post')) {
            $wilayaData = $this->request->getData() ;
            unset($wilayaData["id"]) ;
            $wilaya = $this->Wilayas->patchEntity($wilaya, $wilayaData);
            if ($this->Wilayas->save($wilaya)) {
                $resultJ = json_encode(array('result' => 'success'));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            } else {
                $resultJ = json_encode(array('result' => 'error', 'errors' => $wilaya->errors()));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Wilaya id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wilaya = $this->Wilayas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wilaya = $this->Wilayas->patchEntity($wilaya, $this->request->getData());
            if ($this->Wilayas->save($wilaya)) {
                $this->Flash->success(__('The wilaya has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wilaya could not be saved. Please, try again.'));
        }
        $this->set(compact('wilaya'));
    }
    /**
     * Edit method JSon
     */
    public function editJson()
    {
        $this->autoRender = false;
        //$service = $this->Services->get($id, [ 'contain' => []]);
        $wilayaData = $this->request->getData() ;
        $wilaya = $this->Wilayas->get($wilayaData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wilaya = $this->Wilayas->patchEntity($wilaya, $wilayaData);
            if ($this->Wilayas->save($wilaya)) {
                $resultJ = json_encode(array('result' => 'success'));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $wilaya->errors()));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
        }

    }
    /**
     * Delete method
     *
     * @param string|null $id Wilaya id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wilaya = $this->Wilayas->get($id);
        if ($this->Wilayas->delete($wilaya)) {
            $this->Flash->success(__('The wilaya has been deleted.'));
        } else {
            $this->Flash->error(__('The wilaya could not be deleted. Please, try again.'));
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
        $wilayaData = $this->request->getData() ;
        $wilaya = $this->Wilayas->get($wilayaData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Wilayas->delete($wilaya)) {
                $resultJ = json_encode(array('result' => 'success'));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $wilaya->errors()));
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
        }

    }
}
