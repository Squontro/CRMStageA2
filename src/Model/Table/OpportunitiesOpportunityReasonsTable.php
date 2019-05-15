<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OpportunitiesOpportunityReasons Model
 *
 * @property \App\Model\Table\OpportunityReasonsTable|\Cake\ORM\Association\BelongsTo $OpportunityReasons
 * @property \App\Model\Table\OpportunitiesTable|\Cake\ORM\Association\BelongsTo $Opportunities
 *
 * @method \App\Model\Entity\OpportunitiesOpportunityReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunitiesOpportunityReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OpportunitiesOpportunityReasonsTable extends Table
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

        $this->setTable('opportunities_opportunity_reasons');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'opportunity_reasons_id', 'opportunity_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('OpportunityReasons', [
            'foreignKey' => 'opportunity_reasons_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Opportunities', [
            'foreignKey' => 'opportunity_id',
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
        $rules->add($rules->existsIn(['opportunity_reasons_id'], 'OpportunityReasons'));
        $rules->add($rules->existsIn(['opportunity_id'], 'Opportunities'));

        return $rules;
    }
}
