<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropsectStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropsectStatusesTable Test Case
 */
class PropsectStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropsectStatusesTable
     */
    public $PropsectStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PropsectStatuses',
        'app.PropsectStatusesReasons',
        'app.Prospects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PropsectStatuses') ? [] : ['className' => PropsectStatusesTable::class];
        $this->PropsectStatuses = TableRegistry::getTableLocator()->get('PropsectStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropsectStatuses);

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
