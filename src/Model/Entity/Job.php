<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property int|null $job_type_id
 * @property string|null $name
 * @property float|null $max_salar
 * @property float|null $min_salar
 *
 * @property \App\Model\Entity\JobType $job_type
 * @property \App\Model\Entity\HistJob[] $hist_jobs
 */
class Job extends Entity
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
        'job_type_id' => true,
        'name' => true,
        'max_salar' => true,
        'min_salar' => true,
        'job_type' => true,
        'hist_jobs' => true
    ];
}
