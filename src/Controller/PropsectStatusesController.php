<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropsectStatuses Controller
 *
 * @property \App\Model\Table\PropsectStatusesTable $PropsectStatuses
 *
 * @method \App\Model\Entity\PropsectStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropsectStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $propsectStatuses = $this->paginate($this->PropsectStatuses);

        $this->set(compact('propsectStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Propsect Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propsectStatus = $this->PropsectStatuses->get($id, [
            'contain' => ['Prospects']
        ]);

        $this->set('propsectStatus', $propsectStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propsectStatus = $this->PropsectStatuses->newEntity();
        if ($this->request->is('post')) {
            $propsectStatus = $this->PropsectStatuses->patchEntity($propsectStatus, $this->request->getData());
            if ($this->PropsectStatuses->save($propsectStatus)) {
                $this->Flash->success(__('The propsect status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propsect status could not be saved. Please, try again.'));
        }
        $this->set(compact('propsectStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Propsect Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propsectStatus = $this->PropsectStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propsectStatus = $this->PropsectStatuses->patchEntity($propsectStatus, $this->request->getData());
            if ($this->PropsectStatuses->save($propsectStatus)) {
                $this->Flash->success(__('The propsect status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propsect status could not be saved. Please, try again.'));
        }
        $this->set(compact('propsectStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Propsect Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propsectStatus = $this->PropsectStatuses->get($id);
        if ($this->PropsectStatuses->delete($propsectStatus)) {
            $this->Flash->success(__('The propsect status has been deleted.'));
        } else {
            $this->Flash->error(__('The propsect status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
