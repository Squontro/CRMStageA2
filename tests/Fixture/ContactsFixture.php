<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactsFixture
 *
 */
class ContactsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telephone_number' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'website' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'source_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'town_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'organization_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contacted_first_on' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'INDEX' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'fk_Contacts_Categories1_idx' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
            'fk_Contacts_Sources1_idx' => ['type' => 'index', 'columns' => ['source_id'], 'length' => []],
            'fk_Contacts_Communes1_idx' => ['type' => 'index', 'columns' => ['town_id'], 'length' => []],
            'fk_Contacts_Users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_Contacts_Organizations1_idx' => ['type' => 'index', 'columns' => ['organization_id'], 'length' => []],
            'fk_contacts_Contact_statuses1_idx' => ['type' => 'index', 'columns' => ['contact_status_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Contacts_Categories1' => ['type' => 'foreign', 'columns' => ['category_id'], 'references' => ['contact_categories', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Contacts_Communes1' => ['type' => 'foreign', 'columns' => ['town_id'], 'references' => ['towns', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Contacts_Organizations1' => ['type' => 'foreign', 'columns' => ['organization_id'], 'references' => ['organizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Contacts_Sources1' => ['type' => 'foreign', 'columns' => ['source_id'], 'references' => ['sources', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Contacts_Users1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contacts_Contact_statuses1' => ['type' => 'foreign', 'columns' => ['contact_status_id'], 'references' => ['contact_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'telephone_number' => 'Lorem ipsum dolor sit a',
                'website' => 'Lorem ipsum dolor sit amet',
                'category_id' => 1,
                'source_id' => 1,
                'town_id' => 1,
                'user_id' => 1,
                'organization_id' => 1,
                'contact_status_id' => 1,
                'contacted_first_on' => '2019-05-14 21:50:11',
                'created' => '2019-05-14 21:50:11',
                'modified' => '2019-05-14 21:50:11'
            ],
        ];
        parent::init();
    }
}
