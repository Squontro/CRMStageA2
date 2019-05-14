<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opportunity Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $date_begin
 * @property \Cake\I18n\FrozenDate|null $date_end_estimated
 * @property float|null $budget
 * @property int $opportunity_status_id
 * @property int $opportunity_type_id
 * @property int $user_id
 * @property int $estimate_submitted
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OpportunityStatus $opportunity_status
 * @property \App\Model\Entity\OpportunityType $opportunity_type
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ContactOpportunity[] $contact_opportunities
 * @property \App\Model\Entity\OpportunityProduct[] $opportunity_products
 * @property \App\Model\Entity\OpportunityStatusesReason[] $opportunity_statuses_reasons
 * @property \App\Model\Entity\Raise[] $raises
 */
class Opportunity extends Entity
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
        'name' => true,
        'date_begin' => true,
        'date_end_estimated' => true,
        'budget' => true,
        'opportunity_status_id' => true,
        'opportunity_type_id' => true,
        'user_id' => true,
        'estimate_submitted' => true,
        'created' => true,
        'modified' => true,
        'opportunity_status' => true,
        'opportunity_type' => true,
        'user' => true,
        'contact_opportunities' => true,
        'opportunity_products' => true,
        'opportunity_statuses_reasons' => true,
        'raises' => true
    ];
}
