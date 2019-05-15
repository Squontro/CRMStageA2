<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserInterfaces Controller
 *
 * @property \App\Model\Table\UserInterfacesTable $UserInterfaces
 *
 * @method \App\Model\Entity\UserInterface[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserInterfacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sections']
        ];
        $userInterfaces = $this->paginate($this->UserInterfaces);

        $this->set(compact('userInterfaces'));
    }

    /**
     * View method
     *
     * @param string|null $id User Interface id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userInterface = $this->UserInterfaces->get($id, [
            'contain' => ['Sections', 'Permissions']
        ]);

        $this->set('userInterface', $userInterface);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userInterface = $this->UserInterfaces->newEntity();
        if ($this->request->is('post')) {
            $userInterface = $this->UserInterfaces->patchEntity($userInterface, $this->request->getData());
            if ($this->UserInterfaces->save($userInterface)) {
                $this->Flash->success(__('The user interface has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user interface could not be saved. Please, try again.'));
        }
        $sections = $this->UserInterfaces->Sections->find('list', ['limit' => 200]);
        $this->set(compact('userInterface', 'sections'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Interface id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userInterface = $this->UserInterfaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userInterface = $this->UserInterfaces->patchEntity($userInterface, $this->request->getData());
            if ($this->UserInterfaces->save($userInterface)) {
                $this->Flash->success(__('The user interface has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user interface could not be saved. Please, try again.'));
        }
        $sections = $this->UserInterfaces->Sections->find('list', ['limit' => 200]);
        $this->set(compact('userInterface', 'sections'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Interface id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userInterface = $this->UserInterfaces->get($id);
        if ($this->UserInterfaces->delete($userInterface)) {
            $this->Flash->success(__('The user interface has been deleted.'));
        } else {
            $this->Flash->error(__('The user interface could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
