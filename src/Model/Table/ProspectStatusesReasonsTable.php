<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProspectStatusesReasons Model
 *
 * @property \App\Model\Table\ProspectReasonsTable|\Cake\ORM\Association\BelongsTo $ProspectReasons
 * @property \App\Model\Table\ProspectsTable|\Cake\ORM\Association\BelongsTo $Prospects
 *
 * @method \App\Model\Entity\ProspectStatusesReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProspectStatusesReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProspectStatusesReasonsTable extends Table
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

        $this->setTable('prospect_statuses_reasons');
        $this->setDisplayField('propsect_reason_id');
        $this->setPrimaryKey(['propsect_reason_id', 'prospect_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProspectReasons', [
            'foreignKey' => 'prospect_reason_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Prospects', [
            'foreignKey' => 'prospect_id',
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
        $rules->add($rules->existsIn(['prospect_reason_id'], 'ProspectReasons'));
        $rules->add($rules->existsIn(['prospect_id'], 'Prospects'));

        return $rules;
    }
}
