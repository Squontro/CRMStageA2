<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactsOpportunitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactsOpportunitiesTable Test Case
 */
class ContactsOpportunitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactsOpportunitiesTable
     */
    public $ContactsOpportunities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactsOpportunities',
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
        $config = TableRegistry::getTableLocator()->exists('ContactsOpportunities') ? [] : ['className' => ContactsOpportunitiesTable::class];
        $this->ContactsOpportunities = TableRegistry::getTableLocator()->get('ContactsOpportunities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactsOpportunities);

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
