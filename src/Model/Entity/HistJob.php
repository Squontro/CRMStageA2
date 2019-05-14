<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistJob Entity
 *
 * @property int $job_id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenDate|null $date_job_start
 * @property \Cake\I18n\FrozenDate|null $date_job_end
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Employee $employee
 */
class HistJob extends Entity
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
        'date_job_start' => true,
        'date_job_end' => true,
        'job' => true,
        'employee' => true
    ];
}
