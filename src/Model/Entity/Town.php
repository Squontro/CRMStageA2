<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Town Entity
 *
 * @property int $id
 * @property int $daira_id
 * @property string|null $name
 *
 * @property \App\Model\Entity\Daira $daira
 * @property \App\Model\Entity\Employee[] $employees
 */
class Town extends Entity
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
        'daira_id' => true,
         'code' => true,
        'name' => true,
        'daira' => true,
        'employees' => true
    ];
}
