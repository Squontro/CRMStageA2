<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OpportunityStatusesReasons Model
 *
 * @property \App\Model\Table\OpportunityReasonsTable|\Cake\ORM\Association\BelongsTo $OpportunityReasons
 * @property \App\Model\Table\OpportunitiesTable|\Cake\ORM\Association\BelongsTo $Opportunities
 *
 * @method \App\Model\Entity\OpportunityStatusesReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityStatusesReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OpportunityStatusesReasonsTable extends Table
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

        $this->setTable('opportunity_statuses_reasons');
        $this->setDisplayField('opportunity_status_id');
        $this->setPrimaryKey(['opportunity_status_id', 'opportunity_reason_id']);

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
