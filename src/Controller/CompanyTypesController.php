<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompanyTypes Controller
 *
 * @property \App\Model\Table\CompanyTypesTable $CompanyTypes
 *
 * @method \App\Model\Entity\CompanyType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $companyTypes = $this->paginate($this->CompanyTypes);

        $this->set(compact('companyTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Company Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyType = $this->CompanyTypes->get($id, [
            'contain' => ['Companies']
        ]);

        $this->set('companyType', $companyType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyType = $this->CompanyTypes->newEntity();
        if ($this->request->is('post')) {
            $companyType = $this->CompanyTypes->patchEntity($companyType, $this->request->getData());
            if ($this->CompanyTypes->save($companyType)) {
                $this->Flash->success(__('The company type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company type could not be saved. Please, try again.'));
        }
        $this->set(compact('companyType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyType = $this->CompanyTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyType = $this->CompanyTypes->patchEntity($companyType, $this->request->getData());
            if ($this->CompanyTypes->save($companyType)) {
                $this->Flash->success(__('The company type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company type could not be saved. Please, try again.'));
        }
        $this->set(compact('companyType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyType = $this->CompanyTypes->get($id);
        if ($this->CompanyTypes->delete($companyType)) {
            $this->Flash->success(__('The company type has been deleted.'));
        } else {
            $this->Flash->error(__('The company type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
