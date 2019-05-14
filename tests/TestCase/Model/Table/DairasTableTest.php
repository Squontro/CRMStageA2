<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DairasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DairasTable Test Case
 */
class DairasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DairasTable
     */
    public $Dairas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dairas',
        'app.Wilayas',
        'app.Towns'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dairas') ? [] : ['className' => DairasTable::class];
        $this->Dairas = TableRegistry::getTableLocator()->get('Dairas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dairas);

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
