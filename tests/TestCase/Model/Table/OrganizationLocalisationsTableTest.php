<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationLocalisationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationLocalisationsTable Test Case
 */
class OrganizationLocalisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationLocalisationsTable
     */
    public $OrganizationLocalisations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrganizationLocalisations',
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
        $config = TableRegistry::getTableLocator()->exists('OrganizationLocalisations') ? [] : ['className' => OrganizationLocalisationsTable::class];
        $this->OrganizationLocalisations = TableRegistry::getTableLocator()->get('OrganizationLocalisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationLocalisations);

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
