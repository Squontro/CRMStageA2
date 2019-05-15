<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organization Entity
 *
 * @property int $id
 * @property string $name
 * @property string $telephone_number
 * @property string|null $postal_address
 * @property int $organization_type_id
 * @property int $organization_category_id
 * @property string|null $nis_number
 * @property string|null $nif_number
 * @property string|null $trade_registery_number
 * @property string|null $imposition_article
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OrganizationType $organization_type
 * @property \App\Model\Entity\OrganizationCategory $organization_category
 * @property \App\Model\Entity\Contact[] $contacts
 */
class Organization extends Entity
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
        'telephone_number' => true,
        'postal_address' => true,
        'organization_type_id' => true,
        'organization_category_id' => true,
        'nis_number' => true,
        'nif_number' => true,
        'trade_registery_number' => true,
        'imposition_article' => true,
        'created' => true,
        'modified' => true,
        'organization_type' => true,
        'organization_category' => true,
        'contacts' => true
    ];
}
