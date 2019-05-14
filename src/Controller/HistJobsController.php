<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HistJobs Controller
 *
 * @property \App\Model\Table\HistJobsTable $HistJobs
 *
 * @method \App\Model\Entity\HistJob[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HistJobsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Jobs', 'Employees']
        ];
        $histJobs = $this->paginate($this->HistJobs);

        $this->set(compact('histJobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Hist Job id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $histJob = $this->HistJobs->get($id, [
            'contain' => ['Jobs', 'Employees']
        ]);

        $this->set('histJob', $histJob);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $histJob = $this->HistJobs->newEntity();
        if ($this->request->is('post')) {
            $histJob = $this->HistJobs->patchEntity($histJob, $this->request->getData());
            if ($this->HistJobs->save($histJob)) {
                $this->Flash->success(__('The hist job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hist job could not be saved. Please, try again.'));
        }
        $jobs = $this->HistJobs->Jobs->find('list', ['limit' => 200]);
        $employees = $this->HistJobs->Employees->find('list', ['limit' => 200]);
        $this->set(compact('histJob', 'jobs', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hist Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $histJob = $this->HistJobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $histJob = $this->HistJobs->patchEntity($histJob, $this->request->getData());
            if ($this->HistJobs->save($histJob)) {
                $this->Flash->success(__('The hist job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hist job could not be saved. Please, try again.'));
        }
        $jobs = $this->HistJobs->Jobs->find('list', ['limit' => 200]);
        $employees = $this->HistJobs->Employees->find('list', ['limit' => 200]);
        $this->set(compact('histJob', 'jobs', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hist Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $histJob = $this->HistJobs->get($id);
        if ($this->HistJobs->delete($histJob)) {
            $this->Flash->success(__('The hist job has been deleted.'));
        } else {
            $this->Flash->error(__('The hist job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
