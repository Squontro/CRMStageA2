<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RaisesFixture
 *
 */
class RaisesFixture extends TestFixture
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
        'date_notification' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'raise_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'raise_status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'opportunity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Raises_Raise_types1_idx' => ['type' => 'index', 'columns' => ['raise_type_id'], 'length' => []],
            'fk_Raises_Raise_statuses1_idx' => ['type' => 'index', 'columns' => ['raise_status_id'], 'length' => []],
            'fk_Raises_Opportunities1_idx' => ['type' => 'index', 'columns' => ['opportunity_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Raises_Opportunities1' => ['type' => 'foreign', 'columns' => ['opportunity_id'], 'references' => ['opportunities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Raises_Raise_statuses1' => ['type' => 'foreign', 'columns' => ['raise_status_id'], 'references' => ['raise_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Raises_Raise_types1' => ['type' => 'foreign', 'columns' => ['raise_type_id'], 'references' => ['raise_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'date_notification' => '2019-05-14 21:50:24',
                'raise_type_id' => 1,
                'raise_status_id' => 1,
                'opportunity_id' => 1,
                'created' => '2019-05-14 21:50:24',
                'modified' => '2019-05-14 21:50:24'
            ],
        ];
        parent::init();
    }
}
