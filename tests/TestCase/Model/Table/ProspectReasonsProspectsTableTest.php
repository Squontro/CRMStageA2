<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspectReasonsProspectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspectReasonsProspectsTable Test Case
 */
class ProspectReasonsProspectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspectReasonsProspectsTable
     */
    public $ProspectReasonsProspects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProspectReasonsProspects',
        'app.ProspectReasons',
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
        $config = TableRegistry::getTableLocator()->exists('ProspectReasonsProspects') ? [] : ['className' => ProspectReasonsProspectsTable::class];
        $this->ProspectReasonsProspects = TableRegistry::getTableLocator()->get('ProspectReasonsProspects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProspectReasonsProspects);

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
