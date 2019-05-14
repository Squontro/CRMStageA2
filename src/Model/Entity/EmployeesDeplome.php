<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeesDeplome Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $deplome_id
 * @property \Cake\I18n\FrozenDate $date_deplome
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Deplome $deplome
 */
class EmployeesDeplome extends Entity
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
        'deplome_id' => true,
        'date_deplome' => true,
        'place_deplome' =>true ,
        'employee' => true,
        'deplome' => true
    ];
}
