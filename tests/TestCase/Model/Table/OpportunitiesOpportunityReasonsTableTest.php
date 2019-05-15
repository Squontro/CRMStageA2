<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunitiesOpportunityReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunitiesOpportunityReasonsTable Test Case
 */
class OpportunitiesOpportunityReasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunitiesOpportunityReasonsTable
     */
    public $OpportunitiesOpportunityReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OpportunitiesOpportunityReasons',
        'app.OpportunityReasons',
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
        $config = TableRegistry::getTableLocator()->exists('OpportunitiesOpportunityReasons') ? [] : ['className' => OpportunitiesOpportunityReasonsTable::class];
        $this->OpportunitiesOpportunityReasons = TableRegistry::getTableLocator()->get('OpportunitiesOpportunityReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpportunitiesOpportunityReasons);

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
