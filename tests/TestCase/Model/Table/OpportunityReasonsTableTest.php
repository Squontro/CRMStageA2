<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunityReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunityReasonsTable Test Case
 */
class OpportunityReasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunityReasonsTable
     */
    public $OpportunityReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OpportunityReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OpportunityReasons') ? [] : ['className' => OpportunityReasonsTable::class];
        $this->OpportunityReasons = TableRegistry::getTableLocator()->get('OpportunityReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpportunityReasons);

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
