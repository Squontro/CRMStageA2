<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Countries Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 *
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CountriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $countries = $this->paginate($this->Countries);

        $this->set(compact('countries'));
    }

    /**
     * Index method Json for JsGrid
     * @return \Cake\Http\Response
     */
    public function  indexJson() {
        $this->autoRender = false; // avoid to render view
        $content = $this->Countries->find('all' ,  array('fields' => array('Countries.id' ,'Countries.name')));
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
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => ['Wilayas']
        ]);

        $this->set('country', $country);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $country = $this->Countries->newEntity();
        if ($this->request->is('post')) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $country = $this->Countries->get($id);
        if ($this->Countries->delete($country)) {
            $this->Flash->success(__('The country has been deleted.'));
        } else {
            $this->Flash->error(__('The country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
