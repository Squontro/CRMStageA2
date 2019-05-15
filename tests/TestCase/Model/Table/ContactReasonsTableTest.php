<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactReasonsTable Test Case
 */
class ContactReasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactReasonsTable
     */
    public $ContactReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContactReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContactReasons') ? [] : ['className' => ContactReasonsTable::class];
        $this->ContactReasons = TableRegistry::getTableLocator()->get('ContactReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactReasons);

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
