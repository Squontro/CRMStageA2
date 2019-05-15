<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropsectStatusesReason Entity
 *
 * @property int $propsect_reason_id
 * @property int $prospect_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\PropsectStatus $propsect_status
 * @property \App\Model\Entity\PropsectReason $propsect_reason
 */
class PropsectStatusesReason extends Entity
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
        'propsect_status' => true,
        'propsect_reason' => true
    ];
}
