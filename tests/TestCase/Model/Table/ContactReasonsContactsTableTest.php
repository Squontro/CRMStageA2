<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactReasonsContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactReasonsContactsTable Test Case
 */
class ContactReasonsContactsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactReasonsContactsTable
     */
    public $ContactReasonsContacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactReasonsContacts',
        'app.ContactReasons',
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
        $config = TableRegistry::getTableLocator()->exists('ContactReasonsContacts') ? [] : ['className' => ContactReasonsContactsTable::class];
        $this->ContactReasonsContacts = TableRegistry::getTableLocator()->get('ContactReasonsContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactReasonsContacts);

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
