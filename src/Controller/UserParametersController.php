<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserParameters Controller
 *
 * @property \App\Model\Table\UserParametersTable $UserParameters
 *
 * @method \App\Model\Entity\UserParameter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserParametersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Parameters']
        ];
        $userParameters = $this->paginate($this->UserParameters);

        $this->set(compact('userParameters'));
    }

    /**
     * View method
     *
     * @param string|null $id User Parameter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userParameter = $this->UserParameters->get($id, [
            'contain' => ['Users', 'Parameters']
        ]);

        $this->set('userParameter', $userParameter);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userParameter = $this->UserParameters->newEntity();
        if ($this->request->is('post')) {
            $userParameter = $this->UserParameters->patchEntity($userParameter, $this->request->getData());
            if ($this->UserParameters->save($userParameter)) {
                $this->Flash->success(__('The user parameter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user parameter could not be saved. Please, try again.'));
        }
        $users = $this->UserParameters->Users->find('list', ['limit' => 200]);
        $parameters = $this->UserParameters->Parameters->find('list', ['limit' => 200]);
        $this->set(compact('userParameter', 'users', 'parameters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Parameter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userParameter = $this->UserParameters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userParameter = $this->UserParameters->patchEntity($userParameter, $this->request->getData());
            if ($this->UserParameters->save($userParameter)) {
                $this->Flash->success(__('The user parameter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user parameter could not be saved. Please, try again.'));
        }
        $users = $this->UserParameters->Users->find('list', ['limit' => 200]);
        $parameters = $this->UserParameters->Parameters->find('list', ['limit' => 200]);
        $this->set(compact('userParameter', 'users', 'parameters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Parameter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userParameter = $this->UserParameters->get($id);
        if ($this->UserParameters->delete($userParameter)) {
            $this->Flash->success(__('The user parameter has been deleted.'));
        } else {
            $this->Flash->error(__('The user parameter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
