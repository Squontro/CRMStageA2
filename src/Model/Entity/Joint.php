<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Joint Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string|null $civility_join
 * @property string|null $first_name_join
 * @property string|null $laste_name_join
 * @property \Cake\I18n\FrozenDate|null $date_birth_join
 * @property string|null $place_birth_join
 * @property string|null $sex_join
 * @property string|null $phone_number_join
 * @property string|null $emial_join
 * @property string|null $nationality_join
 * @property string|null $ccp_number_join
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Child[] $childs
 */
class Joint extends Entity
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
        'civility_join' => true,
        'first_name_join' => true,
        'laste_name_join' => true,
        'date_birth_join' => true,
        'place_birth_join' => true,
        'sex_join' => true,
        'phone_number_join' => true,
        'nationality_join' => true,
        'employee' => true,
    ];
}
