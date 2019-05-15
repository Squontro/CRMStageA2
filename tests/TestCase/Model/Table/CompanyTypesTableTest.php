<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyTypesTable Test Case
 */
class CompanyTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyTypesTable
     */
    public $CompanyTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompanyTypes',
        'app.Companies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompanyTypes') ? [] : ['className' => CompanyTypesTable::class];
        $this->CompanyTypes = TableRegistry::getTableLocator()->get('CompanyTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyTypes);

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
