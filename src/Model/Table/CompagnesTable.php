<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compagnes Model
 *
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\HasMany $Departments
 *
 * @method \App\Model\Entity\Compagne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Compagne newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Compagne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compagne|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compagne|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compagne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Compagne[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compagne findOrCreate($search, callable $callback = null, $options = [])
 */
class CompagnesTable extends Table
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

        $this->setTable('compagnes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Departments', [
            'foreignKey' => 'compagne_id'
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

        $validator
            ->scalar('adress_comp')
            ->maxLength('adress_comp', 250)
            ->allowEmptyString('adress_comp');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 20)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('fax_comp')
            ->maxLength('fax_comp', 20)
            ->allowEmptyString('fax_comp');

        $validator
            ->scalar('email_comp')
            ->maxLength('email_comp', 250)
            ->allowEmptyString('email_comp');

        $validator
            ->scalar('site_web')
            ->maxLength('site_web', 250)
            ->allowEmptyString('site_web');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 250)
            ->allowEmptyString('facebook');

        return $validator;
    }
}
