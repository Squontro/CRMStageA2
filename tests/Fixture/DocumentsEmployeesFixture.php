<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsEmployeesFixture
 *
 */
class DocumentsEmployeesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'documents_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employees_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_documents_has_employees_employees1_idx' => ['type' => 'index', 'columns' => ['employees_id'], 'length' => []],
            'fk_documents_has_employees_documents1_idx' => ['type' => 'index', 'columns' => ['documents_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['documents_id', 'employees_id'], 'length' => []],
            'fk_documents_has_employees_documents1' => ['type' => 'foreign', 'columns' => ['documents_id'], 'references' => ['documents', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_documents_has_employees_employees1' => ['type' => 'foreign', 'columns' => ['employees_id'], 'references' => ['employees', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'documents_id' => 1,
                'employees_id' => 1
            ],
        ];
        parent::init();
    }
}
