<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpportunitiesFixture
 *
 */
class OpportunitiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_begin' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_end_estimated' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'budget' => ['type' => 'decimal', 'length' => 20, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'opportunity_status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'opportunity_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estimate_submitted' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Opportunities_Opportunity_statuses1_idx' => ['type' => 'index', 'columns' => ['opportunity_status_id'], 'length' => []],
            'fk_Opportunities_Opportunity_types1_idx' => ['type' => 'index', 'columns' => ['opportunity_type_id'], 'length' => []],
            'fk_opportunities_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Opportunities_Opportunity_statuses1' => ['type' => 'foreign', 'columns' => ['opportunity_status_id'], 'references' => ['opportunity_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Opportunities_Opportunity_types1' => ['type' => 'foreign', 'columns' => ['opportunity_type_id'], 'references' => ['opportunity_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_opportunities_users1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'date_begin' => '2019-05-14',
                'date_end_estimated' => '2019-05-14',
                'budget' => 1.5,
                'opportunity_status_id' => 1,
                'opportunity_type_id' => 1,
                'user_id' => 1,
                'estimate_submitted' => 1,
                'created' => '2019-05-14 21:50:16',
                'modified' => '2019-05-14 21:50:16'
            ],
        ];
        parent::init();
    }
}
