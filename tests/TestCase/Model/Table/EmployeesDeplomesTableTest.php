<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesDeplomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesDeplomesTable Test Case
 */
class EmployeesDeplomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesDeplomesTable
     */
    public $EmployeesDeplomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeesDeplomes',
        'app.Employees',
        'app.Deplomes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeesDeplomes') ? [] : ['className' => EmployeesDeplomesTable::class];
        $this->EmployeesDeplomes = TableRegistry::getTableLocator()->get('EmployeesDeplomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeesDeplomes);

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
