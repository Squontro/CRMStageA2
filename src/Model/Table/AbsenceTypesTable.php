<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AbsenceTypes Model
 *
 * @property \App\Model\Table\AbsEmployeesTable|\Cake\ORM\Association\HasMany $AbsEmployees
 *
 * @method \App\Model\Entity\AbsenceType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AbsenceType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AbsenceType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AbsenceType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbsenceType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbsenceType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AbsenceType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AbsenceType findOrCreate($search, callable $callback = null, $options = [])
 */
class AbsenceTypesTable extends Table
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

        $this->setTable('absence_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('AbsEmployees', [
            'foreignKey' => 'absence_type_id'
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
            ->scalar('name')
            ->maxLength('name', 250)
            ->allowEmptyString('name');

        return $validator;
    }
}
