<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProspectReasonsProspects Model
 *
 * @property \App\Model\Table\ProspectReasonsTable|\Cake\ORM\Association\BelongsTo $ProspectReasons
 * @property \App\Model\Table\ProspectsTable|\Cake\ORM\Association\BelongsTo $Prospects
 *
 * @method \App\Model\Entity\ProspectReasonsProspect get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProspectReasonsProspect findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProspectReasonsProspectsTable extends Table
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

        $this->setTable('prospect_reasons_prospects');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'propsect_reason_id', 'prospect_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProspectReasons', [
            'foreignKey' => 'propsect_reason_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Prospects', [
            'foreignKey' => 'prospect_id',
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
        $rules->add($rules->existsIn(['propsect_reason_id'], 'ProspectReasons'));
        $rules->add($rules->existsIn(['prospect_id'], 'Prospects'));

        return $rules;
    }
}
