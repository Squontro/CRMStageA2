<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $email
 * @property string $telephone_number
 * @property string|null $website
 * @property int $category_id
 * @property int $source_id
 * @property int $town_id
 * @property int $user_id
 * @property int|null $organization_id
 * @property int $contact_status_id
 * @property \Cake\I18n\FrozenTime $contacted_first_on
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ContactCategory $contact_category
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\Town $town
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Organization $organization
 * @property \App\Model\Entity\ContactStatus $contact_status
 * @property \App\Model\Entity\ContactOpportunity[] $contact_opportunities
 * @property \App\Model\Entity\ContactStatusReason[] $contact_status_reasons
 */
class Contact extends Entity
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
        'first_name' => true,
        'email' => true,
        'telephone_number' => true,
        'website' => true,
        'category_id' => true,
        'source_id' => true,
        'town_id' => true,
        'user_id' => true,
        'organization_id' => true,
        'contact_status_id' => true,
        'contacted_first_on' => true,
        'created' => true,
        'modified' => true,
        'contact_category' => true,
        'source' => true,
        'town' => true,
        'user' => true,
        'organization' => true,
        'contact_status' => true,
        'contact_opportunities' => true,
        'contact_status_reasons' => true
    ];
}
