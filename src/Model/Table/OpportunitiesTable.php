<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Opportunities Model
 *
 * @property \App\Model\Table\OpportunityStatusesTable|\Cake\ORM\Association\BelongsTo $OpportunityStatuses
 * @property \App\Model\Table\OpportunityTypesTable|\Cake\ORM\Association\BelongsTo $OpportunityTypes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RaisesTable|\Cake\ORM\Association\HasMany $Raises
 * @property |\Cake\ORM\Association\BelongsToMany $Contacts
 * @property |\Cake\ORM\Association\BelongsToMany $OpportunityReasons
 * @property |\Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Opportunity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Opportunity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Opportunity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Opportunity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opportunity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opportunity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Opportunity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Opportunity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OpportunitiesTable extends Table
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

        $this->setTable('opportunities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OpportunityStatuses', [
            'foreignKey' => 'opportunity_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OpportunityTypes', [
            'foreignKey' => 'opportunity_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Raises', [
            'foreignKey' => 'opportunity_id'
        ]);
        $this->belongsToMany('Contacts', [
            'foreignKey' => 'opportunity_id',
            'targetForeignKey' => 'contact_id',
            'joinTable' => 'contacts_opportunities'
        ]);
        $this->belongsToMany('OpportunityReasons', [
            'foreignKey' => 'opportunity_id',
            'targetForeignKey' => 'opportunity_reason_id',
            'joinTable' => 'opportunities_opportunity_reasons'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'opportunity_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'opportunities_products'
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
            ->date('date_begin')
            ->requirePresence('date_begin', 'create')
            ->allowEmptyDate('date_begin', false);

        $validator
            ->date('date_end_estimated')
            ->allowEmptyDate('date_end_estimated');

        $validator
            ->decimal('budget')
            ->allowEmptyString('budget');

        $validator
            ->requirePresence('estimate_submitted', 'create')
            ->allowEmptyString('estimate_submitted', false);

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
        $rules->add($rules->existsIn(['opportunity_status_id'], 'OpportunityStatuses'));
        $rules->add($rules->existsIn(['opportunity_type_id'], 'OpportunityTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
