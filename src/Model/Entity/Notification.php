<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notification Entity
 *
 * @property int $id
 * @property int|null $object_id
 * @property int|null $source_id
 * @property int $destination_id
 * @property int $notification_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Object $object
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\NotificationType $notification_type
 */
class Notification extends Entity
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
        'object_id' => true,
        'source_id' => true,
        'destination_id' => true,
        'notification_type_id' => true,
        'created' => true,
        'modified' => true,
        'object' => true,
        'source' => true,
        'user' => true,
        'notification_type' => true
    ];
}
