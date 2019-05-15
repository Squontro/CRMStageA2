<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropsectStatus Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\PropsectStatusesReason[] $propsect_statuses_reasons
 * @property \App\Model\Entity\Prospect[] $prospects
 */
class PropsectStatus extends Entity
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
        'created' => true,
        'modified' => true,
        'propsect_statuses_reasons' => true,
        'prospects' => true
    ];
}