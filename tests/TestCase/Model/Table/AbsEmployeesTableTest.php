<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbsEmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbsEmployeesTable Test Case
 */
class AbsEmployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbsEmployeesTable
     */
    public $AbsEmployees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AbsEmployees',
        'app.AbsenceTypes',
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
        $config = TableRegistry::getTableLocator()->exists('AbsEmployees') ? [] : ['className' => AbsEmployeesTable::class];
        $this->AbsEmployees = TableRegistry::getTableLocator()->get('AbsEmployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AbsEmployees);

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
