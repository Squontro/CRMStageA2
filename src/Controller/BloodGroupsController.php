<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BloodGroups Controller
 *
 * @property \App\Model\Table\BloodGroupsTable $BloodGroups
 *
 * @method \App\Model\Entity\BloodGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BloodGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bloodGroups = $this->paginate($this->BloodGroups);

        $this->set(compact('bloodGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Blood Group id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bloodGroup = $this->BloodGroups->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('bloodGroup', $bloodGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bloodGroup = $this->BloodGroups->newEntity();
        if ($this->request->is('post')) {
            $bloodGroup = $this->BloodGroups->patchEntity($bloodGroup, $this->request->getData());
            if ($this->BloodGroups->save($bloodGroup)) {
                $this->Flash->success(__('The blood group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blood group could not be saved. Please, try again.'));
        }
        $this->set(compact('bloodGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blood Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bloodGroup = $this->BloodGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bloodGroup = $this->BloodGroups->patchEntity($bloodGroup, $this->request->getData());
            if ($this->BloodGroups->save($bloodGroup)) {
                $this->Flash->success(__('The blood group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blood group could not be saved. Please, try again.'));
        }
        $this->set(compact('bloodGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blood Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bloodGroup = $this->BloodGroups->get($id);
        if ($this->BloodGroups->delete($bloodGroup)) {
            $this->Flash->success(__('The blood group has been deleted.'));
        } else {
            $this->Flash->error(__('The blood group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
