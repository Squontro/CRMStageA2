<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunitiesTable Test Case
 */
class OpportunitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunitiesTable
     */
    public $Opportunities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Opportunities',
        'app.OpportunityStatuses',
        'app.OpportunityTypes',
        'app.Users',
        'app.ContactOpportunities',
        'app.OpportunityProducts',
        'app.OpportunityStatusesReasons',
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
        $config = TableRegistry::getTableLocator()->exists('Opportunities') ? [] : ['className' => OpportunitiesTable::class];
        $this->Opportunities = TableRegistry::getTableLocator()->get('Opportunities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Opportunities);

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

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
