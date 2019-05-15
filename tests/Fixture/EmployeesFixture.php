<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 *
 */
class EmployeesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'matricule' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone_number' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'department_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'services_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employee_category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'role_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_entered' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_birth' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'blood_group_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_out' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'postal_address' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name_father' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_name_father' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name_mother' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_name_mother' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ccp_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ss_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Employees_Departments1_idx' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
            'fk_Employees_Services1_idx' => ['type' => 'index', 'columns' => ['services_id'], 'length' => []],
            'fk_employees_employee_categories1_idx' => ['type' => 'index', 'columns' => ['employee_category_id'], 'length' => []],
            'fk_employees_roles1_idx' => ['type' => 'index', 'columns' => ['role_id'], 'length' => []],
            'fk_employees_blood_group1_idx' => ['type' => 'index', 'columns' => ['blood_group_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'email_UNIQUE' => ['type' => 'unique', 'columns' => ['email'], 'length' => []],
            'matricule_UNIQUE' => ['type' => 'unique', 'columns' => ['matricule'], 'length' => []],
            'fk_Employees_Departments1' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Employees_Services1' => ['type' => 'foreign', 'columns' => ['services_id'], 'references' => ['services', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_blood_group1' => ['type' => 'foreign', 'columns' => ['blood_group_id'], 'references' => ['blood_groups', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_employee_categories1' => ['type' => 'foreign', 'columns' => ['employee_category_id'], 'references' => ['employee_categories', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_roles1' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['roles', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => 1,
                'matricule' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor sit a',
                'department_id' => 1,
                'services_id' => 1,
                'employee_category_id' => 1,
                'role_id' => 1,
                'date_entered' => '2019-05-14',
                'date_birth' => '2019-05-14',
                'blood_group_id' => 1,
                'date_out' => '2019-05-14',
                'postal_address' => 'Lorem ipsum dolor sit amet',
                'last_name_father' => 'Lorem ipsum dolor sit amet',
                'first_name_father' => 'Lorem ipsum dolor sit amet',
                'last_name_mother' => 'Lorem ipsum dolor sit amet',
                'first_name_mother' => 'Lorem ipsum dolor sit amet',
                'ccp_number' => 'Lorem ipsum dolor sit amet',
                'ss_number' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-05-14 21:50:14',
                'modified' => '2019-05-14 21:50:14'
            ],
        ];
        parent::init();
    }
}
