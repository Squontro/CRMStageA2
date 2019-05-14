<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \App\Model\Table\OrganizationsTable|\Cake\ORM\Association\BelongsTo $Organizations
 * @property \App\Model\Table\CompanyTypesTable|\Cake\ORM\Association\BelongsTo $CompanyTypes
 * @property \App\Model\Table\CompanyCategoriesTable|\Cake\ORM\Association\BelongsTo $CompanyCategories
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Organizations', [
            'foreignKey' => 'organization_id'
        ]);
        $this->belongsTo('CompanyTypes', [
            'foreignKey' => 'company_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CompanyCategories', [
            'foreignKey' => 'company_category_id',
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('nis_number')
            ->maxLength('nis_number', 45)
            ->allowEmptyString('nis_number');

        $validator
            ->scalar('nif_number')
            ->maxLength('nif_number', 45)
            ->allowEmptyString('nif_number');

        $validator
            ->scalar('siret_number')
            ->maxLength('siret_number', 45)
            ->allowEmptyString('siret_number');

        $validator
            ->scalar('siren_number')
            ->maxLength('siren_number', 45)
            ->allowEmptyString('siren_number');

        $validator
            ->scalar('trade_registery_number')
            ->maxLength('trade_registery_number', 45)
            ->allowEmptyString('trade_registery_number');

        $validator
            ->scalar('ape_code')
            ->maxLength('ape_code', 45)
            ->allowEmptyString('ape_code');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['organization_id'], 'Organizations'));
        $rules->add($rules->existsIn(['company_type_id'], 'CompanyTypes'));
        $rules->add($rules->existsIn(['company_category_id'], 'CompanyCategories'));

        return $rules;
    }
}
