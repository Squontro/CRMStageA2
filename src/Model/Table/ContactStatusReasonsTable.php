<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactStatusReasons Model
 *
 * @property \App\Model\Table\ContactReasonsTable|\Cake\ORM\Association\BelongsTo $ContactReasons
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 *
 * @method \App\Model\Entity\ContactStatusReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactStatusReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactStatusReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactStatusReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactStatusReason saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactStatusReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactStatusReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactStatusReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactStatusReasonsTable extends Table
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

        $this->setTable('contact_status_reasons');
        $this->setDisplayField('contact_reasons_id');
        $this->setPrimaryKey(['contact_reasons_id', 'contact_statuses_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('ContactReasons', [
            'foreignKey' => 'contact_reasons_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id',
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
        $rules->add($rules->existsIn(['contact_reasons_id'], 'ContactReasons'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));

        return $rules;
    }
}
