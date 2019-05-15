<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsEmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsEmployeesTable Test Case
 */
class DocumentsEmployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsEmployeesTable
     */
    public $DocumentsEmployees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DocumentsEmployees',
        'app.Documents',
        'app.Employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DocumentsEmployees') ? [] : ['className' => DocumentsEmployeesTable::class];
        $this->DocumentsEmployees = TableRegistry::getTableLocator()->get('DocumentsEmployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentsEmployees);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
