<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchoolLevel Entity
 *
 * @property int $id
 * @property int $level_stude_id
 * @property string|null $name
 *
 * @property \App\Model\Entity\LevelStude $level_stude
 * @property \App\Model\Entity\Employee[] $employees
 */
class SchoolLevel extends Entity
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
        'level_stude_id' => true,
        'name' => true,
        'abr_slevel' => true,  
        'level_stude' => true,
        'employees' => true
    ];
}
