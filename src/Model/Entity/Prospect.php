<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prospect Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $first_name
 * @property string|null $email
 * @property string|null $telephone_number
 * @property int $user_id
 * @property int $source_id
 * @property int $prospect_status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\ProspectStatus $prospect_status
 * @property \App\Model\Entity\ProspectStatusesReason[] $prospect_statuses_reasons
 */
class Prospect extends Entity
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
        'user_id' => true,
        'source_id' => true,
        'prospect_status_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'source' => true,
        'prospect_status' => true,
        'prospect_statuses_reasons' => true
    ];
}
