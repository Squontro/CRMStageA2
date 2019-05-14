<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Raise Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date_notification
 * @property int $raise_type_id
 * @property int $raise_status_id
 * @property int $opportunity_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\RaiseType $raise_type
 * @property \App\Model\Entity\RaiseStatus $raise_status
 * @property \App\Model\Entity\Opportunity $opportunity
 */
class Raise extends Entity
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
        'date_notification' => true,
        'raise_type_id' => true,
        'raise_status_id' => true,
        'opportunity_id' => true,
        'created' => true,
        'modified' => true,
        'raise_type' => true,
        'raise_status' => true,
        'opportunity' => true
    ];
}
