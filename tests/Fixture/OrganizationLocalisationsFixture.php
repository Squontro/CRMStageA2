<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganizationLocalisationsFixture
 */
class OrganizationLocalisationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Organization_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Town_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Organizations_has_Towns_Towns1_idx' => ['type' => 'index', 'columns' => ['Town_id'], 'length' => []],
            'fk_Organizations_has_Towns_Organizations1_idx' => ['type' => 'index', 'columns' => ['Organization_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Organization_id', 'Town_id'], 'length' => []],
            'fk_Organizations_has_Towns_Organizations1' => ['type' => 'foreign', 'columns' => ['Organization_id'], 'references' => ['organizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Organizations_has_Towns_Towns1' => ['type' => 'foreign', 'columns' => ['Town_id'], 'references' => ['towns', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'Organization_id' => 1,
                'Town_id' => 1,
                'created' => '2019-05-03 18:45:04',
                'modified' => '2019-05-03 18:45:04'
            ],
        ];
        parent::init();
    }
}
