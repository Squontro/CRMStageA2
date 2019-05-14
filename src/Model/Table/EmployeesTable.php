<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\TownsTable|\Cake\ORM\Association\BelongsTo $Towns
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 * @property \App\Model\Table\SchoolLevelsTable|\Cake\ORM\Association\BelongsTo $SchoolLevels
 * @property \App\Model\Table\AbsEmployeesTable|\Cake\ORM\Association\HasMany $AbsEmployees
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 * @property \App\Model\Table\EmpDeplomesTable|\Cake\ORM\Association\HasMany $EmpDeplomes
 * @property \App\Model\Table\EmpDocumentsTable|\Cake\ORM\Association\HasMany $EmpDocuments
 * @property \App\Model\Table\EmployeLanguagesTable|\Cake\ORM\Association\HasMany $EmployeLanguages
 * @property \App\Model\Table\ExperiencesTable|\Cake\ORM\Association\HasMany $Experiences
 * @property \App\Model\Table\HistJobsTable|\Cake\ORM\Association\HasMany $HistJobs
 * @property \App\Model\Table\JointsTable|\Cake\ORM\Association\HasMany $Joints
 * @property \App\Model\Table\LeavesTable|\Cake\ORM\Association\HasMany $Leaves
 * @property \App\Model\Table\QualificationsTable|\Cake\ORM\Association\HasMany $Qualifications
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Towns', [
            'foreignKey' => 'town_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SchoolLevels', [
            'foreignKey' => 'school_level_id'
        ]);
        $this->hasMany('AbsEmployees', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Consultations', [
            'foreignKey' => 'employee_id'
        ]);

       $this->belongsToMany('Deplomes', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'deplome_id',
            'joinTable' => 'employees_deplomes'
        ]);
        
        $this->belongsToMany('DocumentTypes', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'document_type_id',
            'joinTable' => 'employees_documents'
        ]);

       $this->hasMany('EmployeesDeplomes', [
            'foreignKey' => 'employee_id',
        ]);

        $this->hasMany('EmployeesDocuments', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('EmployeLanguages', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Experiences', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('HistJobs', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Joints', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Childs', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Leaves', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Qualifications', [
            'foreignKey' => 'employee_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');
        $validator
            ->scalar('matricule')
            ->maxLength('matricule', 50)
            ->allowEmptyString('matricule');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 250)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('laste_name')
            ->maxLength('laste_name', 250)
            ->requirePresence('laste_name', 'create')
            ->allowEmptyString('laste_name', false);

        $validator
            ->date('date_birth')
            ->allowEmptyDate('date_birth');

        $validator
            ->scalar('presume')
            ->maxLength('presume', 50)
            ->allowEmptyString('presume');

        $validator
            ->scalar('last_name_father')
            ->maxLength('last_name_father', 250)
            ->allowEmptyString('last_name_father');

        $validator
            ->scalar('first_name_mother')
            ->maxLength('first_name_mother', 250)
            ->allowEmptyString('first_name_mother');

        $validator
            ->scalar('last_name_mother')
            ->maxLength('last_name_mother', 250)
            ->allowEmptyString('last_name_mother'); 

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 250)
            ->allowEmptyString('adresse');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone_numbre')
            ->maxLength('phone_numbre', 50)
            ->allowEmptyString('phone_numbre');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 50)
            ->allowEmptyString('postal_code');

        $validator
            ->integer('nbr_child')
            ->allowEmptyString('nbr_child');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 100)
            ->allowEmptyString('nationality');

        $validator
            ->scalar('nationality_service')
            ->maxLength('nationality_service', 50)
            ->allowEmptyString('nationality_service');

        $validator
            ->scalar('blood_group')
            ->maxLength('blood_group', 150)
            ->allowEmptyString('blood_group');

        $validator
            ->scalar('ccp_number')
            ->maxLength('ccp_number', 150)
            ->allowEmptyString('ccp_number');

        $validator
            ->scalar('ss_number')
            ->maxLength('ss_number', 150)
            ->allowEmptyString('ss_number');
        $validator
            ->scalar('obs')
            ->allowEmptyString('obs');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
       // $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['town_id'], 'Towns'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));
        $rules->add($rules->existsIn(['school_level_id'], 'SchoolLevels'));

        return $rules;
    }
}
