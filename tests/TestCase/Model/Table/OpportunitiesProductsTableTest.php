<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunitiesProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunitiesProductsTable Test Case
 */
class OpportunitiesProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunitiesProductsTable
     */
    public $OpportunitiesProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OpportunitiesProducts',
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
        $config = TableRegistry::getTableLocator()->exists('OpportunitiesProducts') ? [] : ['className' => OpportunitiesProductsTable::class];
        $this->OpportunitiesProducts = TableRegistry::getTableLocator()->get('OpportunitiesProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpportunitiesProducts);

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
