<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Childs Model
 *
 * @property \App\Model\Table\JointsTable|\Cake\ORM\Association\BelongsTo $Joints
 * @property \App\Model\Table\LevelStudesTable|\Cake\ORM\Association\BelongsTo $LevelStudes
 *
 * @method \App\Model\Entity\Child get($primaryKey, $options = [])
 * @method \App\Model\Entity\Child newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Child[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Child|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Child|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Child patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Child[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Child findOrCreate($search, callable $callback = null, $options = [])
 */
class ChildsTable extends Table
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

        $this->setTable('childs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SchoolLevels', [
            'foreignKey' => 'school_level_id'
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
            ->scalar('laste_name_child')
            ->maxLength('laste_name_child', 250)
            ->allowEmptyString('laste_name_child');

        $validator
            ->date('date_birth_child')
            ->allowEmptyDate('date_birth_child');

        $validator
            ->scalar('presume_child')
            ->maxLength('presume_child', 250)
            ->allowEmptyString('presume_child');

        $validator
            ->scalar('place_birth_child')
            ->maxLength('place_birth_child', 250)
            ->allowEmptyString('place_birth_child');

        $validator
            ->scalar('sex_child')
            ->maxLength('sex_child', 50)
            ->allowEmptyString('sex_child');

        $validator
            ->integer('alive_child')
            ->allowEmptyString('alive_child');

        $validator
            ->integer('educated')
            ->allowEmptyString('educated');

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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
       $rules->add($rules->existsIn(['school_level_id'], 'SchoolLevels'));

        return $rules;
    }
}
