<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LevelStudes Model
 *
 * @property \App\Model\Table\ChildsTable|\Cake\ORM\Association\HasMany $Childs
 * @property \App\Model\Table\SchoolLevelsTable|\Cake\ORM\Association\HasMany $SchoolLevels
 *
 * @method \App\Model\Entity\LevelStude get($primaryKey, $options = [])
 * @method \App\Model\Entity\LevelStude newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LevelStude[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LevelStude|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LevelStude|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LevelStude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LevelStude[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LevelStude findOrCreate($search, callable $callback = null, $options = [])
 */
class LevelStudesTable extends Table
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

        $this->setTable('level_studes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Childs', [
            'foreignKey' => 'level_stude_id'
        ]);
        $this->hasMany('SchoolLevels', [
            'foreignKey' => 'level_stude_id'
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
