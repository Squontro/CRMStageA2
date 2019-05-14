<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Child Entity
 *
 * @property int $id
 * @property int $joint_id
 * @property int $level_stude_id
 * @property string|null $laste_name_child
 * @property \Cake\I18n\FrozenDate|null $date_birth_child
 * @property string|null $presume_child
 * @property string|null $place_birth_child
 * @property string|null $sex_child
 * @property int|null $alive_child
 * @property int|null $educated
 *
 * @property \App\Model\Entity\Joint $joint
 * @property \App\Model\Entity\LevelStude $level_stude
 */
class Child extends Entity
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
        'employee_id' => true,
        'school_level_id' => true,
        'laste_name_child' => true,
        'date_birth_child' => true,
        'presume_child' => true,
        'place_birth_child' => true,
        'sex_child' => true,
        'alive_child' => true,
        'educated' => true,
        'employee' => true,
        'school_level' => true
    ];
}
