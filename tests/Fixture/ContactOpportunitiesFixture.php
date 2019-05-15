<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactOpportunitiesFixture
 */
class ContactOpportunitiesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'opportunity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Opportunities_has_Contacts_Contacts1_idx' => ['type' => 'index', 'columns' => ['contact_id'], 'length' => []],
            'fk_Opportunities_has_Contacts_Opportunities1_idx' => ['type' => 'index', 'columns' => ['opportunity_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['opportunity_id', 'contact_id'], 'length' => []],
            'fk_Opportunities_has_Contacts_Contacts1' => ['type' => 'foreign', 'columns' => ['contact_id'], 'references' => ['contacts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Opportunities_has_Contacts_Opportunities1' => ['type' => 'foreign', 'columns' => ['opportunity_id'], 'references' => ['opportunities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'opportunity_id' => 1,
                'contact_id' => 1,
                'date' => '2019-05-03',
                'created' => '2019-05-03 18:44:55',
                'modified' => '2019-05-03 18:44:55'
            ],
        ];
        parent::init();
    }
}
