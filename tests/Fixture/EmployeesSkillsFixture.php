<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesSkillsFixture
 *
 */
class EmployeesSkillsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'employees_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'skills_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_employees_has_skills_skills1_idx' => ['type' => 'index', 'columns' => ['skills_id'], 'length' => []],
            'fk_employees_has_skills_employees1_idx' => ['type' => 'index', 'columns' => ['employees_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['employees_id', 'skills_id'], 'length' => []],
            'fk_employees_has_skills_employees1' => ['type' => 'foreign', 'columns' => ['employees_id'], 'references' => ['employees', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_has_skills_skills1' => ['type' => 'foreign', 'columns' => ['skills_id'], 'references' => ['skills', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'employees_id' => 1,
                'skills_id' => 1
            ],
        ];
        parent::init();
    }
}
