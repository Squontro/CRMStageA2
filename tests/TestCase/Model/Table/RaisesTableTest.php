<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaisesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaisesTable Test Case
 */
class RaisesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RaisesTable
     */
    public $Raises;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Raises',
        'app.RaiseTypes',
        'app.RaiseStatuses',
        'app.Opportunities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Raises') ? [] : ['className' => RaisesTable::class];
        $this->Raises = TableRegistry::getTableLocator()->get('Raises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Raises);

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

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
