<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\View\View;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 *
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

/**
     * Index method JSon
     */
public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $services = $this->Services->find('all');
            $this->RequestHandler->respondAs('json');
            $this->response->type('application/json');   
            echo json_encode($services);
                            }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments']
        ];
        $services = $this->paginate($this->Services);

        $this->set(compact('services'));
    }

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => ['Departments', 'Employees']
        ]);

        $this->set('service', $service);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $departments = $this->Services->Departments->find('list', ['limit' => 200]);
        $this->set(compact('service', 'departments'));
    }
    /***
    *Add methode JSon
    */
     function addJson(){
         $this->autoRender = false; // avoid to render view
         $service = $this->Services->newEntity();
         if ($this->request->is('post')) {
         $serviceData = $this->request->getData() ;
         unset($serviceData["id"]) ;
         $service = $this->Services->patchEntity($service, $serviceData);         
        if ($this->Services->save($service)) {
        $resultJ = json_encode(array('result' => 'success'));
        $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
             $resultJ = json_encode(array('result' => 'error', 'errors' => $service->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }
    }
    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        
        $service = $this->Services->get($id, [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $departments = $this->Services->Departments->find('list', ['limit' => 200]);
        $this->set(compact('service', 'departments'));
    }

    /**
     * Edit method JSon
     */
     public function editJson()
    {
        $this->autoRender = false;
        $serviceData = $this->request->getData();
        $service = $this->Services->get($serviceData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $serviceData);
            if ($this->Services->save($service)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $service->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        if ($this->Services->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   /**
     * Delete method JSon
     */
     public function deleteJson()
    {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        $serviceData = $this->request->getData() ;
        $service = $this->Services->get($serviceData["id"], [ 'contain' => []]);
        if ($this->request->is(['patch', 'post', 'delete'])) {
            if ($this->Services->delete($service)) {
               $resultJ = json_encode(array('result' => 'success'));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }else{
                $resultJ = json_encode(array('result' => 'error', 'errors' => $service->errors()));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
            }
        }
        
    }
    /**
     * Quick add service
     *
     */
function showService() 
{      
 $this->layout = 'ajax'; 
 $departments = $this->Services->Departments->find('list');
$this->set(compact('departments'));              
        }

        function addservice() {
                $this->autoRender = false;
                $this->layout = 'ajax';
                $service = $this->Services->newEntity();
                if($this->request->is('ajax')) {
                $service = $this->Services->patchEntity($service, $this->request->getData());
                if ($this->Services->save($service)) {
                        $serviceId = $service->id ;
                        echo json_encode(array("response" => true, 'serviceId' => $serviceId));
                    }else {
                        echo json_encode(array("response" => false));
                    } 

                    }  
                              

                } 

    function getServices()
    {
        $this->layout ='ajax';
        $services = $this->Services->find('list')->toarray();
        $selectedId = $this->request->query('id');
        $this->set('services', $services);
        $this->set('selectedId', $selectedId);
    }

    
   
}




