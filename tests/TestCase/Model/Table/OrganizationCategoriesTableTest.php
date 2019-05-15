<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationCategoriesTable Test Case
 */
class OrganizationCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationCategoriesTable
     */
    public $OrganizationCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrganizationCategories',
        'app.Organizations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationCategories') ? [] : ['className' => OrganizationCategoriesTable::class];
        $this->OrganizationCategories = TableRegistry::getTableLocator()->get('OrganizationCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationCategories);

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
