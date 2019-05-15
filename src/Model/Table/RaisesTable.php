<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Raises Model
 *
 * @property \App\Model\Table\RaiseTypesTable|\Cake\ORM\Association\BelongsTo $RaiseTypes
 * @property \App\Model\Table\RaiseStatusesTable|\Cake\ORM\Association\BelongsTo $RaiseStatuses
 * @property \App\Model\Table\OpportunitiesTable|\Cake\ORM\Association\BelongsTo $Opportunities
 *
 * @method \App\Model\Entity\Raise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Raise newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Raise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Raise|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Raise|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Raise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Raise[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Raise findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RaisesTable extends Table
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

        $this->setTable('raises');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RaiseTypes', [
            'foreignKey' => 'raise_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RaiseStatuses', [
            'foreignKey' => 'raise_status_id',
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

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->dateTime('date_notification')
            ->requirePresence('date_notification', 'create')
            ->allowEmptyDateTime('date_notification', false);

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
        $rules->add($rules->existsIn(['raise_type_id'], 'RaiseTypes'));
        $rules->add($rules->existsIn(['raise_status_id'], 'RaiseStatuses'));
        $rules->add($rules->existsIn(['opportunity_id'], 'Opportunities'));

        return $rules;
    }
}
