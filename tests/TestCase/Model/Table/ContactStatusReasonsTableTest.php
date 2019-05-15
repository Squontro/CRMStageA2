<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactStatusReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactStatusReasonsTable Test Case
 */
class ContactStatusReasonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactStatusReasonsTable
     */
    public $ContactStatusReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactStatusReasons',
        'app.ContactReasons',
        'app.ContactStatuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContactStatusReasons') ? [] : ['className' => ContactStatusReasonsTable::class];
        $this->ContactStatusReasons = TableRegistry::getTableLocator()->get('ContactStatusReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactStatusReasons);

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
