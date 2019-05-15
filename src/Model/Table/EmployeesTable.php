<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 * @property |\Cake\ORM\Association\BelongsTo $EmployeeCategories
 * @property |\Cake\ORM\Association\BelongsTo $Roles
 * @property |\Cake\ORM\Association\BelongsTo $BloodGroups
 * @property |\Cake\ORM\Association\HasMany $Users
 * @property |\Cake\ORM\Association\BelongsToMany $Documents
 * @property |\Cake\ORM\Association\BelongsToMany $Skills
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

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'services_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EmployeeCategories', [
            'foreignKey' => 'employee_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BloodGroups', [
            'foreignKey' => 'blood_group_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'employee_id'
        ]);
        $this->belongsToMany('Documents', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'document_id',
            'joinTable' => 'documents_employees'
        ]);
        $this->belongsToMany('Skills', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'skill_id',
            'joinTable' => 'employees_skills'
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('matricule')
            ->maxLength('matricule', 100)
            ->requirePresence('matricule', 'create')
            ->allowEmptyString('matricule', false)
            ->add('matricule', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false)
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 25)
            ->requirePresence('phone_number', 'create')
            ->allowEmptyString('phone_number', false);

        $validator
            ->date('date_entered')
            ->requirePresence('date_entered', 'create')
            ->allowEmptyDate('date_entered', false);

        $validator
            ->date('date_birth')
            ->requirePresence('date_birth', 'create')
            ->allowEmptyDate('date_birth', false);

        $validator
            ->date('date_out')
            ->allowEmptyDate('date_out');

        $validator
            ->scalar('postal_address')
            ->maxLength('postal_address', 150)
            ->allowEmptyString('postal_address');

        $validator
            ->scalar('last_name_father')
            ->maxLength('last_name_father', 150)
            ->allowEmptyString('last_name_father');

        $validator
            ->scalar('first_name_father')
            ->maxLength('first_name_father', 150)
            ->allowEmptyString('first_name_father');

        $validator
            ->scalar('last_name_mother')
            ->maxLength('last_name_mother', 150)
            ->allowEmptyString('last_name_mother');

        $validator
            ->scalar('first_name_mother')
            ->maxLength('first_name_mother', 150)
            ->allowEmptyString('first_name_mother');

        $validator
            ->scalar('ccp_number')
            ->maxLength('ccp_number', 45)
            ->allowEmptyString('ccp_number');

        $validator
            ->scalar('ss_number')
            ->maxLength('ss_number', 45)
            ->allowEmptyString('ss_number');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 250)
            ->allowEmptyString('photo');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['matricule']));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['services_id'], 'Services'));
        $rules->add($rules->existsIn(['employee_category_id'], 'EmployeeCategories'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['blood_group_id'], 'BloodGroups'));

        return $rules;
    }
}
