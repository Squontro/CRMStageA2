<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JointsTable Test Case
 */
class JointsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JointsTable
     */
    public $Joints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Joints',
        'app.Employees',
        'app.Childs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Joints') ? [] : ['className' => JointsTable::class];
        $this->Joints = TableRegistry::getTableLocator()->get('Joints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Joints);

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
