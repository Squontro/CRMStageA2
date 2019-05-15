<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactReasonsContacts Model
 *
 * @property \App\Model\Table\ContactReasonsTable|\Cake\ORM\Association\BelongsTo $ContactReasons
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 *
 * @method \App\Model\Entity\ContactReasonsContact get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactReasonsContact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactReasonsContact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactReasonsContact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactReasonsContact|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactReasonsContact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactReasonsContact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactReasonsContact findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactReasonsContactsTable extends Table
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

        $this->setTable('contact_reasons_contacts');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'contact_reasons_id', 'contact_id']);

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
        $rules->add($rules->existsIn(['contact_reasons_id'], 'ContactReasons'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));

        return $rules;
    }
}
