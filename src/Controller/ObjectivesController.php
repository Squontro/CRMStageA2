<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Objectives Controller
 *
 * @property \App\Model\Table\ObjectivesTable $Objectives
 *
 * @method \App\Model\Entity\Objective[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObjectivesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $objectives = $this->paginate($this->Objectives);

        $this->set(compact('objectives'));
    }

    /**
     * View method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objective = $this->Objectives->get($id, [
            'contain' => []
        ]);

        $this->set('objective', $objective);
    }

    /**
     * Index method Json for JsGrid
     * @return \Cake\Http\Response
     */
    public function  indexJson() {
        $this->autoRender = false; // avoid to render view
        $content = $this->Objectives->find('all' ,  array('fields' => array('Objectives.id' ,'Objectives.name')));
        $this->RequestHandler->respondAs('json');
        $this->autoRender = false;
        $content = json_encode($content);
        $this->response->body($content);
        $this->response->type('json');
        return $this->response;
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objective = $this->Objectives->newEntity();
        if ($this->request->is('post')) {
            $objective = $this->Objectives->patchEntity($objective, $this->request->getData());
            if ($this->Objectives->save($objective)) {
                $this->Flash->success(__('The objective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objective could not be saved. Please, try again.'));
        }
        $this->set(compact('objective'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objective = $this->Objectives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objective = $this->Objectives->patchEntity($objective, $this->request->getData());
            if ($this->Objectives->save($objective)) {
                $this->Flash->success(__('The objective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objective could not be saved. Please, try again.'));
        }
        $this->set(compact('objective'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objective = $this->Objectives->get($id);
        if ($this->Objectives->delete($objective)) {
            $this->Flash->success(__('The objective has been deleted.'));
        } else {
            $this->Flash->error(__('The objective could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
