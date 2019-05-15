<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocumentsEmployee Entity
 *
 * @property int $documents_id
 * @property int $employees_id
 *
 * @property \App\Model\Entity\Document $document
 * @property \App\Model\Entity\Employee $employee
 */
class DocumentsEmployee extends Entity
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
        'document' => true,
        'employee' => true
    ];
}
