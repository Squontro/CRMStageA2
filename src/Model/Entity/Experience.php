<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experience Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string|null $experience
 * @property \Cake\I18n\FrozenDate|null $date_exp_start
 * @property \Cake\I18n\FrozenDate|null $date_exp_end
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Experience extends Entity
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
        'experience' => true,
        'date_exp_start' => true,
        'date_exp_end' => true,
        'place_exp' =>true ,
        'employee' => true
    ];
}
