<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesDocumentsTable Test Case
 */
class EmployeesDocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesDocumentsTable
     */
    public $EmployeesDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeesDocuments',
        'app.Employees',
        'app.DocumentTypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeesDocuments') ? [] : ['className' => EmployeesDocumentsTable::class];
        $this->EmployeesDocuments = TableRegistry::getTableLocator()->get('EmployeesDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeesDocuments);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
