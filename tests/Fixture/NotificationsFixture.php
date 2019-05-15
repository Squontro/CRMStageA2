<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificationsFixture
 *
 */
class NotificationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'object_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'source_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'destination_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'notification_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'INDEX' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'fk_Notifications_Users1_idx' => ['type' => 'index', 'columns' => ['source_id'], 'length' => []],
            'fk_Notifications_Users2_idx' => ['type' => 'index', 'columns' => ['destination_id'], 'length' => []],
            'fk_Notifications_Notification_types1_idx' => ['type' => 'index', 'columns' => ['notification_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Notifications_Notification_types1' => ['type' => 'foreign', 'columns' => ['notification_type_id'], 'references' => ['notification_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Notifications_Users1' => ['type' => 'foreign', 'columns' => ['source_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Notifications_Users2' => ['type' => 'foreign', 'columns' => ['destination_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'object_id' => 1,
                'source_id' => 1,
                'destination_id' => 1,
                'notification_type_id' => 1,
                'created' => '2019-05-14 21:50:15',
                'modified' => '2019-05-14 21:50:15'
            ],
        ];
        parent::init();
    }
}
