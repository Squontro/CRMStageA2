<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompaniesFixture
 */
class CompaniesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nis_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nif_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'siret_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'siren_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'trade_registery_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ape_code' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'organization_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'company_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'company_category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'creation_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modification_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk__Company_types1_idx' => ['type' => 'index', 'columns' => ['company_type_id'], 'length' => []],
            'fk_Companies_Organizations1_idx' => ['type' => 'index', 'columns' => ['organization_id'], 'length' => []],
            'fk_Companies_Company_categories1_idx' => ['type' => 'index', 'columns' => ['company_category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Companies_Company_categories1' => ['type' => 'foreign', 'columns' => ['company_category_id'], 'references' => ['company_categories', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Companies_Organizations1' => ['type' => 'foreign', 'columns' => ['organization_id'], 'references' => ['organizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk__Company_types1' => ['type' => 'foreign', 'columns' => ['company_type_id'], 'references' => ['company_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nis_number' => 'Lorem ipsum dolor sit amet',
                'nif_number' => 'Lorem ipsum dolor sit amet',
                'siret_number' => 'Lorem ipsum dolor sit amet',
                'siren_number' => 'Lorem ipsum dolor sit amet',
                'trade_registery_number' => 'Lorem ipsum dolor sit amet',
                'ape_code' => 'Lorem ipsum dolor sit amet',
                'organization_id' => 1,
                'company_type_id' => 1,
                'company_category_id' => 1,
                'creation_date' => '2019-04-28',
                'modification_date' => '2019-04-28'
            ],
        ];
        parent::init();
    }
}
