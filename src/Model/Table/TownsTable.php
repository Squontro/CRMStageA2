<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Towns Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Wilayas
 * @property |\Cake\ORM\Association\HasMany $Contacts
 * @property |\Cake\ORM\Association\BelongsToMany $Organizations
 *
 * @method \App\Model\Entity\Town get($primaryKey, $options = [])
 * @method \App\Model\Entity\Town newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Town[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Town|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Town|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Town patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Town[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Town findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TownsTable extends Table
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

        $this->setTable('towns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Wilayas', [
            'foreignKey' => 'wilaya_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'town_id'
        ]);
        $this->belongsToMany('Organizations', [
            'foreignKey' => 'town_id',
            'targetForeignKey' => 'organization_id',
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
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false)
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 45)
            ->requirePresence('postal_code', 'create')
            ->allowEmptyString('postal_code', false);

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
        $rules->add($rules->existsIn(['wilaya_id'], 'Wilayas'));

        return $rules;
    }
}
