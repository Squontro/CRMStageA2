<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropsectStatusesReasons Model
 *
 * @property \App\Model\Table\PropsectReasonsTable|\Cake\ORM\Association\BelongsTo $PropsectReasons
 * @property |\Cake\ORM\Association\BelongsTo $Prospects
 *
 * @method \App\Model\Entity\PropsectStatusesReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropsectStatusesReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropsectStatusesReasonsTable extends Table
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

        $this->setTable('propsect_statuses_reasons');
        $this->setDisplayField('propsect_status_id');
        $this->setPrimaryKey(['propsect_status_id', 'propsect_reason_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('PropsectReasons', [
            'foreignKey' => 'propsect_reason_id',
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
        $rules->add($rules->existsIn(['propsect_reason_id'], 'PropsectReasons'));
        $rules->add($rules->existsIn(['prospect_id'], 'Prospects'));

        return $rules;
    }
}
