<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationsTownsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationsTownsTable Test Case
 */
class OrganizationsTownsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationsTownsTable
     */
    public $OrganizationsTowns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrganizationsTowns',
        'app.Organizations',
        'app.Towns'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationsTowns') ? [] : ['className' => OrganizationsTownsTable::class];
        $this->OrganizationsTowns = TableRegistry::getTableLocator()->get('OrganizationsTowns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationsTowns);

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
