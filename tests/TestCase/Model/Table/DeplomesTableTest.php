<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeplomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeplomesTable Test Case
 */
class DeplomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeplomesTable
     */
    public $Deplomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Deplomes',
        'app.EmpDeplomes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Deplomes') ? [] : ['className' => DeplomesTable::class];
        $this->Deplomes = TableRegistry::getTableLocator()->get('Deplomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Deplomes);

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
