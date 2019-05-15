<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganizationsTownsFixture
 *
 */
class OrganizationsTownsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'organization_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'town_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Organizations_has_Towns_Towns1_idx' => ['type' => 'index', 'columns' => ['town_id'], 'length' => []],
            'fk_Organizations_has_Towns_Organizations1_idx' => ['type' => 'index', 'columns' => ['organization_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'organization_id', 'town_id'], 'length' => []],
            'fk_Organizations_has_Towns_Organizations1' => ['type' => 'foreign', 'columns' => ['organization_id'], 'references' => ['organizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Organizations_has_Towns_Towns1' => ['type' => 'foreign', 'columns' => ['town_id'], 'references' => ['towns', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'organization_id' => 1,
                'town_id' => 1,
                'created' => '2019-05-14 21:50:19',
                'modified' => '2019-05-14 21:50:19'
            ],
        ];
        parent::init();
    }
}
