<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrganizationLocalisation Entity
 *
 * @property int $Organization_id
 * @property int $Town_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Organization $organization
 * @property \App\Model\Entity\Town $town
 */
class OrganizationLocalisation extends Entity
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
        'organization' => true,
        'town' => true
    ];
}
