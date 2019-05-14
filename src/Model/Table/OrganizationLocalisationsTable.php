<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrganizationLocalisations Model
 *
 * @property \App\Model\Table\OrganizationsTable|\Cake\ORM\Association\BelongsTo $Organizations
 * @property \App\Model\Table\TownsTable|\Cake\ORM\Association\BelongsTo $Towns
 *
 * @method \App\Model\Entity\OrganizationLocalisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationLocalisation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrganizationLocalisationsTable extends Table
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

        $this->setTable('organization_localisations');
        $this->setDisplayField('Organization_id');
        $this->setPrimaryKey(['Organization_id', 'Town_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Organizations', [
            'foreignKey' => 'Organization_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Towns', [
            'foreignKey' => 'Town_id',
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
        $rules->add($rules->existsIn(['Organization_id'], 'Organizations'));
        $rules->add($rules->existsIn(['Town_id'], 'Towns'));

        return $rules;
    }
}
