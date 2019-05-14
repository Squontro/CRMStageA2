<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsultationTypes Model
 *
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 *
 * @method \App\Model\Entity\ConsultationType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsultationType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsultationType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsultationType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsultationType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationType findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsultationTypesTable extends Table
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

        $this->setTable('consultation_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Consultations', [
            'foreignKey' => 'consultation_type_id'
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
