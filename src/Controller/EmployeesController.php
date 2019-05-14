<?php
namespace App\Controller;

use App\Controller\AppController;
use Dompdf\Adapter\CPDF;      
use Dompdf\Dompdf;
use Dompdf\Exception;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{ 
    public $helpers = array('Html', 'Form');
   //public $components = array('RequestHandler');
   public function initialize() {
    parent::initialize();

    $this->loadComponent('RequestHandler');
  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Towns', 'Services', 'SchoolLevels', 'Jobs']
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }
    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Towns', 'Services', 'SchoolLevels', 'Jobs' ,'AbsEmployees', 'Consultations', 'EmpDocuments', 'EmployeLanguages', 'Experiences', 'HistJobs', 'Joints','Childs', 'Leaves', 'Qualifications']
        ]);

        $this->set('employee', $employee);
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {

        if(!empty($this->request->data['photo']['name']))
        {
            $fileName=$this->request->data['photo']['name'] ;
            $uploadPath='img/Employees';
            $uploadFile=$uploadPath.$fileName ;
            if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
            {
                $this->request->data['photo']=$fileName ;
            }
            }
            $empData = $this->request->getData() ;
           //unset($empData["matricule"]) ;

           // var_dump($empData["employees_documents"]);
          //  die();

       
        if(!empty($this->request->data['employees_documents']['image']['name']))
        {
            $fileNamedoc=$this->request->data['image']['name'] ;
            $uploadPathdoc='img/Employees';
            $uploadFiledoc=$uploadPathdoc.$fileNamedoc ;
            if(move_uploaded_file($this->request->data['image']['tmp_name'], $uploadFiledoc))
            {
                $this->request->data['image']=$fileNamedoc ;
            }
        }
            //var_dump($this->request->getData());
            //die();
            $employee = $this->Employees->patchEntity($employee, $this->request->getData(),['associated' => ['Experiences', 'Joints','Childs','EmployeesDeplomes','Qualifications', 'EmployeesDocuments']]);           
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $towns = $this->Employees->Towns->find('list');
        $services = $this->Employees->Services->find('list');
        $schoolLevels = $this->Employees->SchoolLevels->find('list');
        $jobs = $this->Employees->Jobs->find('list');
        $deplomes = $this->Employees->Deplomes->find('list', ['keyField'=>'id' , 'ValueField'=>'name']);
        $documentTypes = $this->Employees->DocumentTypes->find('list', ['keyField'=>'id' , 'ValueField'=>'name']);
        $this->set(compact('employee', 'towns', 'services', 'schoolLevels', 'jobs','deplomes','documentTypes'));
        $this->set('_serialize',['employee']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           if(!empty($this->request->data['photo']['name']))
            {
            $fileName=$this->request->data['photo']['name'] ;
            $uploadPath='img/Employees';
            $uploadFile=$uploadPath.$fileName ;
            if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
            {
                $this->request->data['photo']=$fileName ;
            }
            }
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $towns = $this->Employees->Towns->find('list');
        $services = $this->Employees->Services->find('list');
        $schoolLevels = $this->Employees->SchoolLevels->find('list');
        $jobs = $this->Employees->Jobs->find('list');
        $this->set(compact('employee', 'towns', 'services', 'schoolLevels','jobs'));
          $this->set('_serialize',['employee']);
           }
    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
        }
     public function  indexJson() {
            $this->autoRender = false; // avoid to render view
            $employees = $this->Employees->find('all' , 
            array('fields' => array('Employees.id', 'Employees.matricule' ,'Employees.first_name','Employees.laste_name','Employees.sex' ,'Employees.phone_numbre','Employees.email' ,'Employees.service_id' ,'Employees.job_id')));
            $this->RequestHandler->respondAs('json');
            $this->autoRender = false; 
            $content = json_encode($employees);
            $this->response->body($content);
            $this->response->type('json');
            return $this->response;
    }

 public function export() {
         $this->setResponse($this->getResponse()->withDownload('ExprtEmp.csv'));
       // $this->response->download('export.csv');
        $data = $this->Employees->find('all');
        $_serialize = 'data';
        $this->viewBuilder()->className('CsvView.Csv');
        $this->set(compact('data', '_serialize'));           
}

public function import() {
      //$data = $this->request->data['csv'];
      $file = fopen("C:\Users\anis\Desktop\ExprtEmp.csv","r");
      //var_dump($file);
        //die() ;
      //$file = $data['tmp_name'];
      $handle = fopen($file, "r");
      while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row[0] == 'id') {
            continue;
        }
        $employees = $this->Employees->get($row[0]);
        $columns = [
            'matricule' => $row[1],
            'first_name' => $row[2],
            'laste_name' => $row[3]
        ];
        $Employee = $this->Employees->patchEntity($employees, $columns);
        $this->Employees->save($Employee);
    }

    fclose($handle);
    $this->set('title','Upload Student CSV File Input Number and others');
    return $this->redirect($this->referer());
}


   public function viewpdf($filename) {
        $this->viewBuilder()
            ->className('Dompdf.Pdf')
            ->layout('Dompdf.default')
            ->options(['config' => [
                'filename' => $filename,
                'render' => 'browser',
            ]]);
    }
    
    


   

}
