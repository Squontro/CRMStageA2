<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deplomes Model
 *
 * @property \App\Model\Table\EmpDeplomesTable|\Cake\ORM\Association\HasMany $EmpDeplomes
 *
 * @method \App\Model\Entity\Deplome get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deplome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Deplome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deplome|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deplome|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deplome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deplome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deplome findOrCreate($search, callable $callback = null, $options = [])
 */
class DeplomesTable extends Table
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

        $this->setTable('deplomes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
   
     $this->belongsToMany('Employees', [
            'foreignKey' => 'deplome_id',
            'targetForeignKey' => 'employee_id',
            'joinTable' => 'employees_deplomes'
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
