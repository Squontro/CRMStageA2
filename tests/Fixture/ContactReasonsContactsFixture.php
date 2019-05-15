<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactReasonsContactsFixture
 *
 */
class ContactReasonsContactsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'contact_reasons_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_contact_reasons_has_contact_statuses_contact_reasons1_idx' => ['type' => 'index', 'columns' => ['contact_reasons_id'], 'length' => []],
            'fk_contact_status_reasons_contacts1_idx' => ['type' => 'index', 'columns' => ['contact_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'contact_reasons_id', 'contact_id'], 'length' => []],
            'fk_contact_reasons_has_contact_statuses_contact_reasons1' => ['type' => 'foreign', 'columns' => ['contact_reasons_id'], 'references' => ['contact_reasons', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contact_status_reasons_contacts1' => ['type' => 'foreign', 'columns' => ['contact_id'], 'references' => ['contacts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'contact_reasons_id' => 1,
                'contact_id' => 1,
                'created' => '2019-05-14 21:50:10',
                'modified' => '2019-05-14 21:50:10'
            ],
        ];
        parent::init();
    }
}
