<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prospects Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SourcesTable|\Cake\ORM\Association\BelongsTo $Sources
 * @property \App\Model\Table\ProspectStatusesTable|\Cake\ORM\Association\BelongsTo $ProspectStatuses
 * @property |\Cake\ORM\Association\BelongsToMany $ProspectReasons
 *
 * @method \App\Model\Entity\Prospect get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prospect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prospect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prospect|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospect|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProspectsTable extends Table
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

        $this->setTable('prospects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProspectStatuses', [
            'foreignKey' => 'propsect_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('ProspectReasons', [
            'foreignKey' => 'prospect_id',
            'targetForeignKey' => 'prospect_reason_id',
            'joinTable' => 'prospect_reasons_prospects'
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
            ->allowEmptyString('name', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmptyString('first_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('telephone_number')
            ->maxLength('telephone_number', 25)
            ->allowEmptyString('telephone_number');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        $rules->add($rules->existsIn(['propsect_status_id'], 'ProspectStatuses'));

        return $rules;
    }
}
