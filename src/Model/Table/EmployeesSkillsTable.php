<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployeesSkills Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\SkillsTable|\Cake\ORM\Association\BelongsTo $Skills
 *
 * @method \App\Model\Entity\EmployeesSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeesSkill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeesSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSkill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesSkill|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSkill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSkill findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeesSkillsTable extends Table
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

        $this->setTable('employees_skills');
        $this->setDisplayField('employees_id');
        $this->setPrimaryKey(['employees_id', 'skills_id']);

        $this->belongsTo('Employees', [
            'foreignKey' => 'employees_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Skills', [
            'foreignKey' => 'skills_id',
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
        $rules->add($rules->existsIn(['employees_id'], 'Employees'));
        $rules->add($rules->existsIn(['skills_id'], 'Skills'));

        return $rules;
    }
}
