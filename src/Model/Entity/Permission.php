<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permission Entity
 *
 * @property int $id
 * @property int $user_interface_id
 * @property int $action_id
 * @property int $profile_id
 * @property string $name
 * @property int $permission
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserInterface $user_interface
 * @property \App\Model\Entity\Action $action
 * @property \App\Model\Entity\Profile $profile
 */
class Permission extends Entity
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
        'permission' => true,
        'created' => true,
        'modified' => true,
        'user_interface' => true,
        'action' => true,
        'profile' => true
    ];
}
