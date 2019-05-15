<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocumentsEmployees Model
 *
 * @property \App\Model\Table\DocumentsTable|\Cake\ORM\Association\BelongsTo $Documents
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\DocumentsEmployee get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocumentsEmployee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocumentsEmployee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsEmployee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsEmployee|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsEmployee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsEmployee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsEmployee findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentsEmployeesTable extends Table
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

        $this->setTable('documents_employees');
        $this->setDisplayField('documents_id');
        $this->setPrimaryKey(['documents_id', 'employees_id']);

        $this->belongsTo('Documents', [
            'foreignKey' => 'documents_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employees', [
            'foreignKey' => 'employees_id',
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
        $rules->add($rules->existsIn(['documents_id'], 'Documents'));
        $rules->add($rules->existsIn(['employees_id'], 'Employees'));

        return $rules;
    }
}
