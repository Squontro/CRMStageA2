<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyType Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $creation_date
 * @property \Cake\I18n\FrozenDate $modification_date
 *
 * @property \App\Model\Entity\Company[] $companies
 */
class CompanyType extends Entity
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
        'creation_date' => true,
        'modification_date' => true,
        'companies' => true
    ];
}
