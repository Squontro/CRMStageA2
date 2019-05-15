<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $matricule
 * @property string $name
 * @property string $first_name
 * @property string $email
 * @property string $phone_number
 * @property int $department_id
 * @property int $services_id
 * @property int $employee_category_id
 * @property int $role_id
 * @property \Cake\I18n\FrozenDate $date_entered
 * @property \Cake\I18n\FrozenDate $date_birth
 * @property int $blood_group_id
 * @property \Cake\I18n\FrozenDate|null $date_out
 * @property string|null $postal_address
 * @property string|null $last_name_father
 * @property string|null $first_name_father
 * @property string|null $last_name_mother
 * @property string|null $first_name_mother
 * @property string|null $ccp_number
 * @property string|null $ss_number
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Town $town
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\SchoolLevel $school_level
 * @property \App\Model\Entity\AbsEmployee[] $abs_employees
 * @property \App\Model\Entity\Consultation[] $consultations
 * @property \App\Model\Entity\Deplome[] $deplomes
 * @property \App\Model\Entity\DocumentType[] $document_types
 * @property \App\Model\Entity\EmployeesDeplome[] $employees_deplomes
 * @property \App\Model\Entity\EmployeesDocument[] $employees_documents
 * @property \App\Model\Entity\EmployeLanguage[] $employe_languages
 * @property \App\Model\Entity\Experience[] $experiences
 * @property \App\Model\Entity\HistJob[] $hist_jobs
 * @property \App\Model\Entity\Joint[] $joints
 * @property \App\Model\Entity\Child[] $childs
 * @property \App\Model\Entity\Leave[] $leaves
 * @property \App\Model\Entity\Qualification[] $qualifications
 */
class Employee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'matricule' => true,
        'name' => true,
        'first_name' => true,
        'email' => true,
        'phone_number' => true,
        'department_id' => true,
        'services_id' => true,
        'employee_category_id' => true,
        'role_id' => true,
        'date_entered' => true,
        'date_birth' => true,
        'blood_group_id' => true,
        'date_out' => true,
        'postal_address' => true,
        'last_name_father' => true,
        'first_name_father' => true,
        'last_name_mother' => true,
        'first_name_mother' => true,
        'ccp_number' => true,
        'ss_number' => true,
        'photo' => true,
        'created' => true,
        'modified' => true,
        'town' => true,
        'service' => true,
        'job' => true,
        'school_level' => true,
        'abs_employees' => true,
        'consultations' => true,
        'deplomes' => true,
        'document_types' => true,
        'employees_deplomes' => true,
        'employees_documents' => true,
        'employe_languages' => true,
        'experiences' => true,
        'hist_jobs' => true,
        'joints' => true,
        'childs' => true,
        'leaves' => true,
        'qualifications' => true
    ];
}
