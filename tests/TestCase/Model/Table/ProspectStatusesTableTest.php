<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspectStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspectStatusesTable Test Case
 */
class ProspectStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspectStatusesTable
     */
    public $ProspectStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProspectStatuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProspectStatuses') ? [] : ['className' => ProspectStatusesTable::class];
        $this->ProspectStatuses = TableRegistry::getTableLocator()->get('ProspectStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProspectStatuses);

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
