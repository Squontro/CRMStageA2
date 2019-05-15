<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunityProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunityProductsTable Test Case
 */
class OpportunityProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunityProductsTable
     */
    public $OpportunityProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OpportunityProducts',
        'app.Opportunities',
        'app.Products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OpportunityProducts') ? [] : ['className' => OpportunityProductsTable::class];
        $this->OpportunityProducts = TableRegistry::getTableLocator()->get('OpportunityProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpportunityProducts);

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
