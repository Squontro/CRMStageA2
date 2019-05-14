<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dairas Model
 *
 * @property \App\Model\Table\WilayasTable|\Cake\ORM\Association\BelongsTo $Wilayas
 * @property \App\Model\Table\TownsTable|\Cake\ORM\Association\HasMany $Towns
 *
 * @method \App\Model\Entity\Daira get($primaryKey, $options = [])
 * @method \App\Model\Entity\Daira newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Daira[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Daira|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Daira|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Daira patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Daira[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Daira findOrCreate($search, callable $callback = null, $options = [])
 */
class DairasTable extends Table
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

        $this->setTable('dairas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wilayas', [
            'foreignKey' => 'wilaya_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Towns', [
            'foreignKey' => 'daira_id'
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 250)
            ->allowEmptyString('name');

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
        $rules->add($rules->existsIn(['wilaya_id'], 'Wilayas'));

        return $rules;
    }
}
