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
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $wilayas = $this->paginate($this->Wilayas);

        $this->set(compact('wilayas'));
    }

    /**
     * Index method Json for JsGrid
     * @return \Cake\Http\Response
     */
    public function  indexJson() {
        $this->autoRender = false; // avoid to render view
        $content = $this->Wilayas->find('all' ,  array('fields' => array('Wilayas.id' ,'Wilayas.name','Wilayas.country_id')));
        $this->RequestHandler->respondAs('json');
        $this->autoRender = false;
        $content = json_encode($content);
        $this->response->body($content);
        $this->response->type('json');
        return $this->response;
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
            'contain' => ['Countries', 'Towns']
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
        $countries = $this->Wilayas->Countries->find('list', ['limit' => 200]);
        $this->set(compact('wilaya', 'countries'));
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
        $countries = $this->Wilayas->Countries->find('list', ['limit' => 200]);
        $this->set(compact('wilaya', 'countries'));
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
}
