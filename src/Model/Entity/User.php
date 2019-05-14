<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property int $profile_id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Contact[] $contacts
 * @property \App\Model\Entity\Opportunity[] $opportunities
 * @property \App\Model\Entity\Prospect[] $prospects
 * @property \App\Model\Entity\UserParameter[] $user_parameters
 */
class User extends Entity
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
        'last_name' => true,
        'first_name' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'profile_id' => true,
        'employee_id' => true,
        'created' => true,
        'modified' => true,
        'profile' => true,
        'employee' => true,
        'contacts' => true,
        'opportunities' => true,
        'prospects' => true,
        'user_parameters' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
