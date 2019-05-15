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
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wilayas']
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
            'contain' => ['Wilayas', 'Organizations', 'Contacts']
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
        $wilayas = $this->Towns->Wilayas->find('list', ['limit' => 200]);
        $organizations = $this->Towns->Organizations->find('list', ['limit' => 200]);
        $this->set(compact('town', 'wilayas', 'organizations'));
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
            'contain' => ['Organizations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $town = $this->Towns->patchEntity($town, $this->request->getData());
            if ($this->Towns->save($town)) {
                $this->Flash->success(__('The town has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The town could not be saved. Please, try again.'));
        }
        $wilayas = $this->Towns->Wilayas->find('list', ['limit' => 200]);
        $organizations = $this->Towns->Organizations->find('list', ['limit' => 200]);
        $this->set(compact('town', 'wilayas', 'organizations'));
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
}
