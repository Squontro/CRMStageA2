<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PermissionsFixture
 *
 */
class PermissionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_interface_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'action_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profile_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'permission' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Permissions_Interfaces1_idx' => ['type' => 'index', 'columns' => ['user_interface_id'], 'length' => []],
            'fk_Permissions_Actions1_idx' => ['type' => 'index', 'columns' => ['action_id'], 'length' => []],
            'fk_Permissions_Profiles1_idx' => ['type' => 'index', 'columns' => ['profile_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_interface_id', 'action_id', 'profile_id'], 'length' => []],
            'fk_Permissions_Actions1' => ['type' => 'foreign', 'columns' => ['action_id'], 'references' => ['actions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Permissions_Interfaces1' => ['type' => 'foreign', 'columns' => ['user_interface_id'], 'references' => ['user_interfaces', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Permissions_Profiles1' => ['type' => 'foreign', 'columns' => ['profile_id'], 'references' => ['profiles', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_interface_id' => 1,
                'action_id' => 1,
                'profile_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'permission' => 1,
                'created' => '2019-05-14 21:50:20',
                'modified' => '2019-05-14 21:50:20'
            ],
        ];
        parent::init();
    }
}
