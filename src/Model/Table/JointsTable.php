<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Joints Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\ChildsTable|\Cake\ORM\Association\HasMany $Childs
 *
 * @method \App\Model\Entity\Joint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Joint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Joint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Joint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joint|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Joint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Joint findOrCreate($search, callable $callback = null, $options = [])
 */
class JointsTable extends Table
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

        $this->setTable('joints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('civility_join')
            ->maxLength('civility_join', 150)
            ->allowEmptyString('civility_join');

        $validator
            ->scalar('first_name_join')
            ->maxLength('first_name_join', 250)
            ->allowEmptyString('first_name_join');

        $validator
            ->scalar('laste_name_join')
            ->maxLength('laste_name_join', 250)
            ->allowEmptyString('laste_name_join');

        $validator
            ->date('date_birth_join')
            ->allowEmptyDate('date_birth_join');

        $validator
            ->scalar('place_birth_join')
            ->maxLength('place_birth_join', 250)
            ->allowEmptyString('place_birth_join');

        $validator
            ->scalar('sex_join')
            ->maxLength('sex_join', 50)
            ->allowEmptyString('sex_join');

        $validator
            ->scalar('phone_number_join')
            ->maxLength('phone_number_join', 250)
            ->allowEmptyString('phone_number_join');

        $validator
            ->scalar('nationality_join')
            ->maxLength('nationality_join', 150)
            ->allowEmptyString('nationality_join');


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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}
