<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OpportunityProducts Model
 *
 * @property \App\Model\Table\OpportunitiesTable|\Cake\ORM\Association\BelongsTo $Opportunities
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\OpportunityProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\OpportunityProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OpportunityProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunityProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpportunityProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OpportunityProduct findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OpportunityProductsTable extends Table
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

        $this->setTable('opportunity_products');
        $this->setDisplayField('opportunity_id');
        $this->setPrimaryKey(['opportunity_id', 'product_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Opportunities', [
            'foreignKey' => 'opportunity_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
        $rules->add($rules->existsIn(['opportunity_id'], 'Opportunities'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
