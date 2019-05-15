<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parameter Entity
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $parameter_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParameterType $parameter_type
 * @property \App\Model\Entity\UserParameter[] $user_parameters
 */
class Parameter extends Entity
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
        'code' => true,
        'parameter_type_id' => true,
        'created' => true,
        'modified' => true,
        'parameter_type' => true,
        'user_parameters' => true
    ];
}
