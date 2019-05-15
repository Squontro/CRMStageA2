<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserInterfacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserInterfacesTable Test Case
 */
class UserInterfacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserInterfacesTable
     */
    public $UserInterfaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserInterfaces',
        'app.Sections',
        'app.Permissions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserInterfaces') ? [] : ['className' => UserInterfacesTable::class];
        $this->UserInterfaces = TableRegistry::getTableLocator()->get('UserInterfaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserInterfaces);

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
