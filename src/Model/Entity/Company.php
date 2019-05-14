<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string|null $nis_number
 * @property string|null $nif_number
 * @property string|null $siret_number
 * @property string|null $siren_number
 * @property string|null $trade_registery_number
 * @property string|null $ape_code
 * @property int|null $organization_id
 * @property int $company_type_id
 * @property int $company_category_id
 * @property \Cake\I18n\FrozenDate $creation_date
 * @property \Cake\I18n\FrozenDate $modification_date
 *
 * @property \App\Model\Entity\Organization $organization
 * @property \App\Model\Entity\CompanyType $company_type
 * @property \App\Model\Entity\CompanyCategory $company_category
 */
class Company extends Entity
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
        'nis_number' => true,
        'nif_number' => true,
        'siret_number' => true,
        'siren_number' => true,
        'trade_registery_number' => true,
        'ape_code' => true,
        'organization_id' => true,
        'company_type_id' => true,
        'company_category_id' => true,
        'creation_date' => true,
        'modification_date' => true,
        'organization' => true,
        'company_type' => true,
        'company_category' => true
    ];
}
