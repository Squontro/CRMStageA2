<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropsectStatusesReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropsectStatusesReasonsTable Test Case
 */
class PropsectStatusesReasonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropsectStatusesReasonsTable
     */
    public $PropsectStatusesReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PropsectStatusesReasons',
        'app.PropsectStatuses',
        'app.PropsectReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PropsectStatusesReasons') ? [] : ['className' => PropsectStatusesReasonsTable::class];
        $this->PropsectStatusesReasons = TableRegistry::getTableLocator()->get('PropsectStatusesReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropsectStatusesReasons);

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
