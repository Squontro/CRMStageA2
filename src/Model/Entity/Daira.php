<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Daira Entity
 *
 * @property int $id
 * @property int $wilaya_id
 * @property string|null $name
 *
 * @property \App\Model\Entity\Wilaya $wilaya
 * @property \App\Model\Entity\Town[] $towns
 */
class Daira extends Entity
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
        'wilaya_id' => true,
         'code' => true,
        'name' => true,
        'wilaya' => true,
        'towns' => true
    ];
}
