<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationTypes Controller
 *
 * @property \App\Model\Table\OrganizationTypesTable $OrganizationTypes
 *
 * @method \App\Model\Entity\OrganizationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $organizationTypes = $this->paginate($this->OrganizationTypes);

        $this->set(compact('organizationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationType = $this->OrganizationTypes->get($id, [
            'contain' => ['Organizations']
        ]);

        $this->set('organizationType', $organizationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationType = $this->OrganizationTypes->newEntity();
        if ($this->request->is('post')) {
            $organizationType = $this->OrganizationTypes->patchEntity($organizationType, $this->request->getData());
            if ($this->OrganizationTypes->save($organizationType)) {
                $this->Flash->success(__('The organization type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization type could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationType = $this->OrganizationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationType = $this->OrganizationTypes->patchEntity($organizationType, $this->request->getData());
            if ($this->OrganizationTypes->save($organizationType)) {
                $this->Flash->success(__('The organization type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization type could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationType = $this->OrganizationTypes->get($id);
        if ($this->OrganizationTypes->delete($organizationType)) {
            $this->Flash->success(__('The organization type has been deleted.'));
        } else {
            $this->Flash->error(__('The organization type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
