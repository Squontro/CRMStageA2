<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organizations Model
 *
 * @property \App\Model\Table\OrganizationTypesTable|\Cake\ORM\Association\BelongsTo $OrganizationTypes
 * @property \App\Model\Table\OrganizationCategoriesTable|\Cake\ORM\Association\BelongsTo $OrganizationCategories
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\HasMany $Contacts
 * @property |\Cake\ORM\Association\BelongsToMany $Towns
 *
 * @method \App\Model\Entity\Organization get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organization newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Organization[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organization|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organization|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organization patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organization[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organization findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrganizationsTable extends Table
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

        $this->setTable('organizations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OrganizationTypes', [
            'foreignKey' => 'organization_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrganizationCategories', [
            'foreignKey' => 'organization_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'organization_id'
        ]);
        $this->belongsToMany('Towns', [
            'foreignKey' => 'organization_id',
            'targetForeignKey' => 'town_id',
            'joinTable' => 'organizations_towns'
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false)
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('telephone_number')
            ->maxLength('telephone_number', 100)
            ->requirePresence('telephone_number', 'create')
            ->allowEmptyString('telephone_number', false);

        $validator
            ->scalar('postal_address')
            ->maxLength('postal_address', 500)
            ->allowEmptyString('postal_address');

        $validator
            ->scalar('nis_number')
            ->maxLength('nis_number', 45)
            ->allowEmptyString('nis_number');

        $validator
            ->scalar('nif_number')
            ->maxLength('nif_number', 45)
            ->allowEmptyString('nif_number');

        $validator
            ->scalar('trade_registery_number')
            ->maxLength('trade_registery_number', 45)
            ->allowEmptyString('trade_registery_number');

        $validator
            ->scalar('imposition_article')
            ->maxLength('imposition_article', 45)
            ->allowEmptyString('imposition_article');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['organization_type_id'], 'OrganizationTypes'));
        $rules->add($rules->existsIn(['organization_category_id'], 'OrganizationCategories'));

        return $rules;
    }
}
