<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProspectReasonsProspects Controller
 *
 * @property \App\Model\Table\ProspectReasonsProspectsTable $ProspectReasonsProspects
 *
 * @method \App\Model\Entity\ProspectReasonsProspect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectReasonsProspectsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProspectReasons', 'Prospects']
        ];
        $prospectReasonsProspects = $this->paginate($this->ProspectReasonsProspects);

        $this->set(compact('prospectReasonsProspects'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect Reasons Prospect id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospectReasonsProspect = $this->ProspectReasonsProspects->get($id, [
            'contain' => ['ProspectReasons', 'Prospects']
        ]);

        $this->set('prospectReasonsProspect', $prospectReasonsProspect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospectReasonsProspect = $this->ProspectReasonsProspects->newEntity();
        if ($this->request->is('post')) {
            $prospectReasonsProspect = $this->ProspectReasonsProspects->patchEntity($prospectReasonsProspect, $this->request->getData());
            if ($this->ProspectReasonsProspects->save($prospectReasonsProspect)) {
                $this->Flash->success(__('The prospect reasons prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect reasons prospect could not be saved. Please, try again.'));
        }
        $prospectReasons = $this->ProspectReasonsProspects->ProspectReasons->find('list', ['limit' => 200]);
        $prospects = $this->ProspectReasonsProspects->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectReasonsProspect', 'prospectReasons', 'prospects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect Reasons Prospect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospectReasonsProspect = $this->ProspectReasonsProspects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospectReasonsProspect = $this->ProspectReasonsProspects->patchEntity($prospectReasonsProspect, $this->request->getData());
            if ($this->ProspectReasonsProspects->save($prospectReasonsProspect)) {
                $this->Flash->success(__('The prospect reasons prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect reasons prospect could not be saved. Please, try again.'));
        }
        $prospectReasons = $this->ProspectReasonsProspects->ProspectReasons->find('list', ['limit' => 200]);
        $prospects = $this->ProspectReasonsProspects->Prospects->find('list', ['limit' => 200]);
        $this->set(compact('prospectReasonsProspect', 'prospectReasons', 'prospects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect Reasons Prospect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospectReasonsProspect = $this->ProspectReasonsProspects->get($id);
        if ($this->ProspectReasonsProspects->delete($prospectReasonsProspect)) {
            $this->Flash->success(__('The prospect reasons prospect has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect reasons prospect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
