<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PropsectStatusesReasonsFixture
 */
class PropsectStatusesReasonsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'propsect_reason_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'prospect_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_propsect_reasons_has_propsect_statuses_propsect_reasons1_idx' => ['type' => 'index', 'columns' => ['propsect_reason_id'], 'length' => []],
            'fk_propsect_statuses_reasons_prospects1_idx' => ['type' => 'index', 'columns' => ['prospect_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['propsect_reason_id', 'prospect_id'], 'length' => []],
            'fk_propsect_reasons_has_propsect_statuses_propsect_reasons1' => ['type' => 'foreign', 'columns' => ['propsect_reason_id'], 'references' => ['propsect_reasons', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_propsect_statuses_reasons_prospects1' => ['type' => 'foreign', 'columns' => ['prospect_id'], 'references' => ['prospects', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'propsect_reason_id' => 1,
                'prospect_id' => 1,
                'created' => '2019-05-03 18:45:09',
                'modified' => '2019-05-03 18:45:09'
            ],
        ];
        parent::init();
    }
}
