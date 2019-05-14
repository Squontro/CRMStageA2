<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompanyTypes Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\HasMany $Companies
 *
 * @method \App\Model\Entity\CompanyType get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompanyType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompanyType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompanyType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyType findOrCreate($search, callable $callback = null, $options = [])
 */
class CompanyTypesTable extends Table
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

        $this->setTable('company_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Companies', [
            'foreignKey' => 'company_type_id'
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->date('creation_date')
            ->requirePresence('creation_date', 'create')
            ->allowEmptyDate('creation_date', false);

        $validator
            ->date('modification_date')
            ->requirePresence('modification_date', 'create')
            ->allowEmptyDate('modification_date', false);

        return $validator;
    }
}
