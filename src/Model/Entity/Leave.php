<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Leave Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $leave_type_id
 * @property \Cake\I18n\FrozenDate|null $date_leave_start
 * @property \Cake\I18n\FrozenDate|null $date_leave_end
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\LeaveType $leave_type
 */
class Leave extends Entity
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
        'leave_type_id' => true,
        'date_leave_start' => true,
        'date_leave_end' => true,
        'employee' => true,
        'leave_type' => true
    ];
}
