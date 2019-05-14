<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Childs Controller
 *
 * @property \App\Model\Table\ChildsTable $Childs
 *
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChildsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'LevelStudes']
        ];
        $childs = $this->paginate($this->Childs);

        $this->set(compact('childs'));
    }

    /**
     * View method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $child = $this->Childs->get($id, [
            'contain' => ['Employees', 'LevelStudes']
        ]);

        $this->set('child', $child);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $child = $this->Childs->newEntity();
        if ($this->request->is('post')) {
            $child = $this->Childs->patchEntity($child, $this->request->getData());
            if ($this->Childs->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $employees = $this->Childs->Employees->find('list');
        $levelStudes = $this->Childs->LevelStudes->find('list');
        $this->set(compact('child', 'employees', 'levelStudes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $child = $this->Childs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $child = $this->Childs->patchEntity($child, $this->request->getData());
            if ($this->Childs->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $employees = $this->Childs->Employees->find('list');
        $levelStudes = $this->Childs->LevelStudes->find('list');
        $this->set(compact('child', 'employees', 'levelStudes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $child = $this->Childs->get($id);
        if ($this->Childs->delete($child)) {
            $this->Flash->success(__('The child has been deleted.'));
        } else {
            $this->Flash->error(__('The child could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
