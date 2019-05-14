<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wilayas Model
 *
 * @property \App\Model\Table\DairasTable|\Cake\ORM\Association\HasMany $Dairas
 *
 * @method \App\Model\Entity\Wilaya get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wilaya newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Wilaya[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wilaya|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wilaya|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wilaya patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wilaya[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wilaya findOrCreate($search, callable $callback = null, $options = [])
 */
class WilayasTable extends Table
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

        $this->setTable('wilayas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Dairas', [
            'foreignKey' => 'wilaya_id'
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
}
