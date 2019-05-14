<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbsenceTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbsenceTypesTable Test Case
 */
class AbsenceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbsenceTypesTable
     */
    public $AbsenceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AbsenceTypes',
        'app.AbsEmployees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AbsenceTypes') ? [] : ['className' => AbsenceTypesTable::class];
        $this->AbsenceTypes = TableRegistry::getTableLocator()->get('AbsenceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AbsenceTypes);

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
