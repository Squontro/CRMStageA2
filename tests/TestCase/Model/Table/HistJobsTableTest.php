<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistJobsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistJobsTable Test Case
 */
class HistJobsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistJobsTable
     */
    public $HistJobs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.HistJobs',
        'app.Jobs',
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
        $config = TableRegistry::getTableLocator()->exists('HistJobs') ? [] : ['className' => HistJobsTable::class];
        $this->HistJobs = TableRegistry::getTableLocator()->get('HistJobs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HistJobs);

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
