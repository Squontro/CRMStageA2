<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactsOpportunity Entity
 *
 * @property int $id
 * @property int $opportunity_id
 * @property int $contact_id
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Opportunity $opportunity
 * @property \App\Model\Entity\Contact $contact
 */
class ContactsOpportunity extends Entity
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
        'date' => true,
        'created' => true,
        'modified' => true,
        'opportunity' => true,
        'contact' => true
    ];
}
