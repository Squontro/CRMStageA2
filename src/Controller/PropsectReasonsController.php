<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropsectReasons Controller
 *
 * @property \App\Model\Table\PropsectReasonsTable $PropsectReasons
 *
 * @method \App\Model\Entity\PropsectReason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropsectReasonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $propsectReasons = $this->paginate($this->PropsectReasons);

        $this->set(compact('propsectReasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Propsect Reason id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propsectReason = $this->PropsectReasons->get($id, [
            'contain' => ['PropsectStatusesReasons']
        ]);

        $this->set('propsectReason', $propsectReason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propsectReason = $this->PropsectReasons->newEntity();
        if ($this->request->is('post')) {
            $propsectReason = $this->PropsectReasons->patchEntity($propsectReason, $this->request->getData());
            if ($this->PropsectReasons->save($propsectReason)) {
                $this->Flash->success(__('The propsect reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propsect reason could not be saved. Please, try again.'));
        }
        $this->set(compact('propsectReason'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Propsect Reason id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propsectReason = $this->PropsectReasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propsectReason = $this->PropsectReasons->patchEntity($propsectReason, $this->request->getData());
            if ($this->PropsectReasons->save($propsectReason)) {
                $this->Flash->success(__('The propsect reason has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propsect reason could not be saved. Please, try again.'));
        }
        $this->set(compact('propsectReason'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Propsect Reason id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propsectReason = $this->PropsectReasons->get($id);
        if ($this->PropsectReasons->delete($propsectReason)) {
            $this->Flash->success(__('The propsect reason has been deleted.'));
        } else {
            $this->Flash->error(__('The propsect reason could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
