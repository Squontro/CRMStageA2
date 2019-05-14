<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compagne Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $adress_comp
 * @property string|null $phone_number
 * @property string|null $fax_comp
 * @property string|null $email_comp
 * @property string|null $site_web
 * @property string|null $facebook
 *
 * @property \App\Model\Entity\Department[] $departments
 */
class Compagne extends Entity
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
        'adress_comp' => true,
        'phone_number' => true,
        'fax_comp' => true,
        'email_comp' => true,
        'site_web' => true,
        'facebook' => true,
        'departments' => true
    ];
}
