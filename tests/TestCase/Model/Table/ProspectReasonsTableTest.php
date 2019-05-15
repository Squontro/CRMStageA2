<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspectReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspectReasonsTable Test Case
 */
class ProspectReasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspectReasonsTable
     */
    public $ProspectReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProspectReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProspectReasons') ? [] : ['className' => ProspectReasonsTable::class];
        $this->ProspectReasons = TableRegistry::getTableLocator()->get('ProspectReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProspectReasons);

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
