<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpportunitiesProductsFixture
 *
 */
class OpportunitiesProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'opportunity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_opportunities_has_products_products1_idx' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'fk_opportunities_has_products_opportunities1_idx' => ['type' => 'index', 'columns' => ['opportunity_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'opportunity_id', 'product_id'], 'length' => []],
            'fk_opportunities_has_products_opportunities1' => ['type' => 'foreign', 'columns' => ['opportunity_id'], 'references' => ['opportunities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_opportunities_has_products_products1' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'opportunity_id' => 1,
                'product_id' => 1,
                'created' => '2019-05-14 21:50:17',
                'modified' => '2019-05-14 21:50:17'
            ],
        ];
        parent::init();
    }
}
