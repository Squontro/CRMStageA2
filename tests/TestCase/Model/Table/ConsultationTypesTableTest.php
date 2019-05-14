<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultationTypesTable Test Case
 */
class ConsultationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultationTypesTable
     */
    public $ConsultationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ConsultationTypes',
        'app.Consultations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConsultationTypes') ? [] : ['className' => ConsultationTypesTable::class];
        $this->ConsultationTypes = TableRegistry::getTableLocator()->get('ConsultationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsultationTypes);

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
