<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesSkillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesSkillsTable Test Case
 */
class EmployeesSkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesSkillsTable
     */
    public $EmployeesSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmployeesSkills',
        'app.Employees',
        'app.Skills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeesSkills') ? [] : ['className' => EmployeesSkillsTable::class];
        $this->EmployeesSkills = TableRegistry::getTableLocator()->get('EmployeesSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeesSkills);

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
