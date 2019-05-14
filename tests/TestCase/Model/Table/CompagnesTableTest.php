<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompagnesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompagnesTable Test Case
 */
class CompagnesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompagnesTable
     */
    public $Compagnes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Compagnes',
        'app.Departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Compagnes') ? [] : ['className' => CompagnesTable::class];
        $this->Compagnes = TableRegistry::getTableLocator()->get('Compagnes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Compagnes);

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
