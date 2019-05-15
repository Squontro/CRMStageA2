<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RaiseTypes Controller
 *
 * @property \App\Model\Table\RaiseTypesTable $RaiseTypes
 *
 * @method \App\Model\Entity\RaiseType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RaiseTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $raiseTypes = $this->paginate($this->RaiseTypes);

        $this->set(compact('raiseTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Raise Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raiseType = $this->RaiseTypes->get($id, [
            'contain' => ['Raises']
        ]);

        $this->set('raiseType', $raiseType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raiseType = $this->RaiseTypes->newEntity();
        if ($this->request->is('post')) {
            $raiseType = $this->RaiseTypes->patchEntity($raiseType, $this->request->getData());
            if ($this->RaiseTypes->save($raiseType)) {
                $this->Flash->success(__('The raise type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise type could not be saved. Please, try again.'));
        }
        $this->set(compact('raiseType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Raise Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raiseType = $this->RaiseTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raiseType = $this->RaiseTypes->patchEntity($raiseType, $this->request->getData());
            if ($this->RaiseTypes->save($raiseType)) {
                $this->Flash->success(__('The raise type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raise type could not be saved. Please, try again.'));
        }
        $this->set(compact('raiseType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Raise Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $raiseType = $this->RaiseTypes->get($id);
        if ($this->RaiseTypes->delete($raiseType)) {
            $this->Flash->success(__('The raise type has been deleted.'));
        } else {
            $this->Flash->error(__('The raise type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
