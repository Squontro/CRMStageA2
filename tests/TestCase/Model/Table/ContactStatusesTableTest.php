<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactStatusesTable Test Case
 */
class ContactStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactStatusesTable
     */
    public $ContactStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactStatuses',
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
        $config = TableRegistry::getTableLocator()->exists('ContactStatuses') ? [] : ['className' => ContactStatusesTable::class];
        $this->ContactStatuses = TableRegistry::getTableLocator()->get('ContactStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactStatuses);

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
