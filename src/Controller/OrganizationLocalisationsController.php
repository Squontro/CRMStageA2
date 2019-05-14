<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationLocalisations Controller
 *
 * @property \App\Model\Table\OrganizationLocalisationsTable $OrganizationLocalisations
 *
 * @method \App\Model\Entity\OrganizationLocalisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationLocalisationsController extends AppController
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
        $organizationLocalisations = $this->paginate($this->OrganizationLocalisations);

        $this->set(compact('organizationLocalisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Localisation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationLocalisation = $this->OrganizationLocalisations->get($id, [
            'contain' => ['Organizations', 'Towns']
        ]);

        $this->set('organizationLocalisation', $organizationLocalisation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationLocalisation = $this->OrganizationLocalisations->newEntity();
        if ($this->request->is('post')) {
            debug($this->request->data());
            die();
            if ($this->OrganizationLocalisations->save($organizationLocalisation)) {
                $this->Flash->success(__('The organization localisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization localisation could not be saved. Please, try again.'));
        }

        $organizations = $this->OrganizationLocalisations->Organizations->find('list', ['limit' => 200]);
        $towns = $this->OrganizationLocalisations->Towns->find('list', ['limit' => 200]);
        $this->set(compact('organizationLocalisation', 'organizations', 'towns'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Localisation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationLocalisation = $this->OrganizationLocalisations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationLocalisation = $this->OrganizationLocalisations->patchEntity($organizationLocalisation, $this->request->getData());
            if ($this->OrganizationLocalisations->save($organizationLocalisation)) {
                $this->Flash->success(__('The organization localisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization localisation could not be saved. Please, try again.'));
        }
        $organizations = $this->OrganizationLocalisations->Organizations->find('list', ['limit' => 200]);
        $towns = $this->OrganizationLocalisations->Towns->find('list', ['limit' => 200]);
        $this->set(compact('organizationLocalisation', 'organizations', 'towns'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Localisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationLocalisation = $this->OrganizationLocalisations->get($id);
        if ($this->OrganizationLocalisations->delete($organizationLocalisation)) {
            $this->Flash->success(__('The organization localisation has been deleted.'));
        } else {
            $this->Flash->error(__('The organization localisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
