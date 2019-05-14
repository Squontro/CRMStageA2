<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AbsEmployee Entity
 *
 * @property int $absence_type_id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenDate|null $date_abs_start
 * @property \Cake\I18n\FrozenDate|null $date_abs_end
 * @property string|null $motif
 *
 * @property \App\Model\Entity\AbsenceType $absence_type
 * @property \App\Model\Entity\Employee $employee
 */
class AbsEmployee extends Entity
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
        'date_abs_start' => true,
        'date_abs_end' => true,
        'motif' => true,
        'absence_type' => true,
        'employee' => true
    ];
}
