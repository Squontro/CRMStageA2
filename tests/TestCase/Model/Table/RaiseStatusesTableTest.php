<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaiseStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaiseStatusesTable Test Case
 */
class RaiseStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RaiseStatusesTable
     */
    public $RaiseStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RaiseStatuses',
        'app.Raises'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RaiseStatuses') ? [] : ['className' => RaiseStatusesTable::class];
        $this->RaiseStatuses = TableRegistry::getTableLocator()->get('RaiseStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RaiseStatuses);

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
