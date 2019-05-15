<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactOpportunitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactOpportunitiesTable Test Case
 */
class ContactOpportunitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactOpportunitiesTable
     */
    public $ContactOpportunities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactOpportunities',
        'app.Opportunities',
        'app.Contacts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContactOpportunities') ? [] : ['className' => ContactOpportunitiesTable::class];
        $this->ContactOpportunities = TableRegistry::getTableLocator()->get('ContactOpportunities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactOpportunities);

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
