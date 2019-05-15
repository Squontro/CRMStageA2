<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpportunitiesOpportunityReasonsFixture
 *
 */
class OpportunitiesOpportunityReasonsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'opportunity_reasons_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'opportunity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_opportunity_reasons_has_opportunities_opportunities1_idx' => ['type' => 'index', 'columns' => ['opportunity_id'], 'length' => []],
            'fk_opportunity_reasons_has_opportunities_opportunity_reason_idx' => ['type' => 'index', 'columns' => ['opportunity_reasons_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'opportunity_reasons_id', 'opportunity_id'], 'length' => []],
            'fk_opportunity_reasons_has_opportunities_opportunities1' => ['type' => 'foreign', 'columns' => ['opportunity_id'], 'references' => ['opportunities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_opportunity_reasons_has_opportunities_opportunity_reasons1' => ['type' => 'foreign', 'columns' => ['opportunity_reasons_id'], 'references' => ['opportunity_reasons', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'opportunity_reasons_id' => 1,
                'opportunity_id' => 1,
                'created' => '2019-05-14 21:50:16',
                'modified' => '2019-05-14 21:50:16'
            ],
        ];
        parent::init();
    }
}
