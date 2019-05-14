<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $town_id
 * @property int $service_id
 * @property int|null $school_level_id
 * @property string $civilitty
 * @property string|null $matricule
 * @property string $first_name
 * @property string $laste_name
 * @property string|null $maiden_name
 * @property \Cake\I18n\FrozenDate|null $date_birth
 * @property string|null $presume
 * @property string|null $last_name_father
 * @property string|null $first_name_mother
 * @property string|null $last_name_mother
 * @property string $fami_situation
 * @property string $sex
 * @property string|null $adresse
 * @property string|null $email
 * @property string|null $phone_numbre
 * @property string|null $postal_code
 * @property int|null $nbr_child
 * @property string|null $nationality
 * @property string|null $nationality_service
 * @property string|null $blood_group
 * @property string|null $ccp_number
 * @property string|null $ss_number
 * @property float|null $salary
 * @property string|null $anem_number
 * @property bool|null $anem
 * @property string|null $photo
 * @property string|null $obs
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Town $town
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\SchoolLevel $school_level
 * @property \App\Model\Entity\AbsEmployee[] $abs_employees
 * @property \App\Model\Entity\Consultation[] $consultations
 * @property \App\Model\Entity\EmpDeplome[] $emp_deplomes
 * @property \App\Model\Entity\EmpDocument[] $emp_documents
 * @property \App\Model\Entity\EmployeLanguage[] $employe_languages
 * @property \App\Model\Entity\Experience[] $experiences
 * @property \App\Model\Entity\HistJob[] $hist_jobs
 * @property \App\Model\Entity\Joint[] $joints
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
        'town_id' => true,
        'service_id' => true,
         'job_id' =>true ,
         'date_entred' =>true ,
         'date_out' =>true ,
        'school_level_id' => true,
        'civilitty' => true,
        'matricule' => true,
        'first_name' => true,
        'laste_name' => true,
        'date_birth' => true,
        'presume' => true,
        'last_name_father' => true,
        'first_name_mother' => true,
        'last_name_mother' => true,
        'fami_situation' => true,
        'sex' => true,
        'adresse' => true,
        'email' => true,
        'phone_numbre' => true,
        'postal_code' => true,
        'nbr_child' => true,
        'nationality' => true,
        'nationality_service' => true,
        'blood_group' => true,
        'ccp_number' => true,
        'ss_number' => true,
        'photo' => true,
        'obs' => true,
        'created' => true,
        'modified' => true,
        'town' => true,
        'service' => true,
        'school_level' => true,
        'abs_employees' => true,
        'consultations' => true,
        'deplomes' => true ,
        'employees_deplomes' => true,
        'document_types' => true ,
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
