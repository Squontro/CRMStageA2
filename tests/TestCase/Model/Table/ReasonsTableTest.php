<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReasonsTable Test Case
 */
class ReasonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReasonsTable
     */
    public $Reasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Reasons',
        'app.OpportunityReasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Reasons') ? [] : ['className' => ReasonsTable::class];
        $this->Reasons = TableRegistry::getTableLocator()->get('Reasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reasons);

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
