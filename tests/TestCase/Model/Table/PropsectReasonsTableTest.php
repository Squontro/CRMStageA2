<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropsectReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropsectReasonsTable Test Case
 */
class PropsectReasonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropsectReasonsTable
     */
    public $PropsectReasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PropsectReasons',
        'app.PropsectStatusesReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PropsectReasons') ? [] : ['className' => PropsectReasonsTable::class];
        $this->PropsectReasons = TableRegistry::getTableLocator()->get('PropsectReasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropsectReasons);

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
}
