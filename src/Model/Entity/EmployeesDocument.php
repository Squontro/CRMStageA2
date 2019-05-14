<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeesDocument Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $document_type_id
 * @property \Cake\I18n\FrozenDate|null $date_eta
 * @property \Cake\I18n\FrozenDate|null $date_exp
 * @property string|null $image
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\DocumentType $document_type
 */
class EmployeesDocument extends Entity
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
        'document_type_id' => true,
        'date_eta' => true,
        'date_exp' => true,
        'image' => true,
        'employee' => true,
        'document_type' => true
    ];
}
