<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Joints Controller
 *
 * @property \App\Model\Table\JointsTable $Joints
 *
 * @method \App\Model\Entity\Joint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JointsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees']
        ];
        $joints = $this->paginate($this->Joints);

        $this->set(compact('joints'));
    }

    /**
     * View method
     *
     * @param string|null $id Joint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $joint = $this->Joints->get($id, [
            'contain' => ['Employees', 'Childs']
        ]);

        $this->set('joint', $joint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $joint = $this->Joints->newEntity();
        if ($this->request->is('post')) {
            $joint = $this->Joints->patchEntity($joint, $this->request->getData());
            if ($this->Joints->save($joint)) {
                $this->Flash->success(__('The joint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joint could not be saved. Please, try again.'));
        }
        $employees = $this->Joints->Employees->find('list', ['limit' => 200]);
        $this->set(compact('joint', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Joint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $joint = $this->Joints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $joint = $this->Joints->patchEntity($joint, $this->request->getData());
            if ($this->Joints->save($joint)) {
                $this->Flash->success(__('The joint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joint could not be saved. Please, try again.'));
        }
        $employees = $this->Joints->Employees->find('list', ['limit' => 200]);
        $this->set(compact('joint', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Joint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $joint = $this->Joints->get($id);
        if ($this->Joints->delete($joint)) {
            $this->Flash->success(__('The joint has been deleted.'));
        } else {
            $this->Flash->error(__('The joint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
