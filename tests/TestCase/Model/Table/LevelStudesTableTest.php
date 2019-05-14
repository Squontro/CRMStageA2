<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LevelStudesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LevelStudesTable Test Case
 */
class LevelStudesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LevelStudesTable
     */
    public $LevelStudes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LevelStudes',
        'app.Childs',
        'app.SchoolLevels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LevelStudes') ? [] : ['className' => LevelStudesTable::class];
        $this->LevelStudes = TableRegistry::getTableLocator()->get('LevelStudes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LevelStudes);

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
