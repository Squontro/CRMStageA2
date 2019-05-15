<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunityStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunityStatusesTable Test Case
 */
class OpportunityStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunityStatusesTable
     */
    public $OpportunityStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OpportunityStatuses',
        'app.Opportunities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OpportunityStatuses') ? [] : ['className' => OpportunityStatusesTable::class];
        $this->OpportunityStatuses = TableRegistry::getTableLocator()->get('OpportunityStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpportunityStatuses);

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
