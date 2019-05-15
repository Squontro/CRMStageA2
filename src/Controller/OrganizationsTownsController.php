<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationsTowns Controller
 *
 * @property \App\Model\Table\OrganizationsTownsTable $OrganizationsTowns
 *
 * @method \App\Model\Entity\OrganizationsTown[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationsTownsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Organizations', 'Towns']
        ];
        $organizationsTowns = $this->paginate($this->OrganizationsTowns);

        $this->set(compact('organizationsTowns'));
    }

    /**
     * View method
     *
     * @param string|null $id Organizations Town id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationsTown = $this->OrganizationsTowns->get($id, [
            'contain' => ['Organizations', 'Towns']
        ]);

        $this->set('organizationsTown', $organizationsTown);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationsTown = $this->OrganizationsTowns->newEntity();
        if ($this->request->is('post')) {
            $organizationsTown = $this->OrganizationsTowns->patchEntity($organizationsTown, $this->request->getData());
            if ($this->OrganizationsTowns->save($organizationsTown)) {
                $this->Flash->success(__('The organizations town has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizations town could not be saved. Please, try again.'));
        }
        $organizations = $this->OrganizationsTowns->Organizations->find('list', ['limit' => 200]);
        $towns = $this->OrganizationsTowns->Towns->find('list', ['limit' => 200]);
        $this->set(compact('organizationsTown', 'organizations', 'towns'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organizations Town id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationsTown = $this->OrganizationsTowns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationsTown = $this->OrganizationsTowns->patchEntity($organizationsTown, $this->request->getData());
            if ($this->OrganizationsTowns->save($organizationsTown)) {
                $this->Flash->success(__('The organizations town has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizations town could not be saved. Please, try again.'));
        }
        $organizations = $this->OrganizationsTowns->Organizations->find('list', ['limit' => 200]);
        $towns = $this->OrganizationsTowns->Towns->find('list', ['limit' => 200]);
        $this->set(compact('organizationsTown', 'organizations', 'towns'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organizations Town id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationsTown = $this->OrganizationsTowns->get($id);
        if ($this->OrganizationsTowns->delete($organizationsTown)) {
            $this->Flash->success(__('The organizations town has been deleted.'));
        } else {
            $this->Flash->error(__('The organizations town could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
