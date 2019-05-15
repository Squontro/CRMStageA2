<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OpportunitiesProduct Entity
 *
 * @property int $id
 * @property int $opportunity_id
 * @property int $product_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Opportunity $opportunity
 * @property \App\Model\Entity\Product $product
 */
class OpportunitiesProduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'opportunity' => true,
        'product' => true
    ];
}
