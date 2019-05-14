<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolLevelsTable Test Case
 */
class SchoolLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolLevelsTable
     */
    public $SchoolLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SchoolLevels',
        'app.LevelStudes',
        'app.Employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SchoolLevels') ? [] : ['className' => SchoolLevelsTable::class];
        $this->SchoolLevels = TableRegistry::getTableLocator()->get('SchoolLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolLevels);

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
