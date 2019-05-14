<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AbsEmployees Model
 *
 * @property \App\Model\Table\AbsenceTypesTable|\Cake\ORM\Association\BelongsTo $AbsenceTypes
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\AbsEmployee get($primaryKey, $options = [])
 * @method \App\Model\Entity\AbsEmployee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AbsEmployee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AbsEmployee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbsEmployee|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbsEmployee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AbsEmployee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AbsEmployee findOrCreate($search, callable $callback = null, $options = [])
 */
class AbsEmployeesTable extends Table
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

        $this->setTable('abs_employees');
        $this->setDisplayField('absence_type_id');
        $this->setPrimaryKey(['absence_type_id', 'employee_id']);

        $this->belongsTo('AbsenceTypes', [
            'foreignKey' => 'absence_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
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
            ->date('date_abs_start')
            ->allowEmptyDate('date_abs_start');

        $validator
            ->date('date_abs_end')
            ->allowEmptyDate('date_abs_end');

        $validator
            ->scalar('motif')
            ->maxLength('motif', 250)
            ->allowEmptyString('motif');

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
        $rules->add($rules->existsIn(['absence_type_id'], 'AbsenceTypes'));
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}
