<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactStatusReason Entity
 *
 * @property int $contact_reasons_id
 * @property int $contact_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ContactReason $contact_reason
 * @property \App\Model\Entity\Contact $contact
 */
class ContactStatusReason extends Entity
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
        'contact_reason' => true,
        'contact' => true
    ];
}
