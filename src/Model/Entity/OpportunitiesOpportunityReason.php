<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OpportunitiesOpportunityReason Entity
 *
 * @property int $id
 * @property int $opportunity_reasons_id
 * @property int $opportunity_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OpportunityReason $opportunity_reason
 * @property \App\Model\Entity\Opportunity $opportunity
 */
class OpportunitiesOpportunityReason extends Entity
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
        'opportunity_reason' => true,
        'opportunity' => true
    ];
}
