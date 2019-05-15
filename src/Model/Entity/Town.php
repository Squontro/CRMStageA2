<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Town Entity
 *
 * @property int $id
 * @property string $name
 * @property string $postal_code
 * @property int $wilaya_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
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
        'name' => true,
        'postal_code' => true,
        'wilaya_id' => true,
        'created' => true,
        'modified' => true,
        'daira' => true,
        'employees' => true
    ];
}
