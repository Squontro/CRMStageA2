<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultation Entity
 *
 * @property int $id
 * @property int $consultation_type_id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenDate|null $date_consultation
 * @property string|null $obs_consultation
 *
 * @property \App\Model\Entity\ConsultationType $consultation_type
 * @property \App\Model\Entity\Employee $employee
 */
class Consultation extends Entity
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
        'consultation_type_id' => true,
        'employee_id' => true,
        'date_consultation' => true,
        'obs_consultation' => true,
        'consultation_type' => true,
        'employee' => true
    ];
}
