<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Levels'), ['controller' => 'SchoolLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Level'), ['controller' => 'SchoolLevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abs Employees'), ['controller' => 'AbsEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abs Employee'), ['controller' => 'AbsEmployees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emp Deplomes'), ['controller' => 'EmpDeplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp Deplome'), ['controller' => 'EmpDeplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emp Documents'), ['controller' => 'EmpDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp Document'), ['controller' => 'EmpDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employe Languages'), ['controller' => 'EmployeLanguages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employe Language'), ['controller' => 'EmployeLanguages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hist Jobs'), ['controller' => 'HistJobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hist Job'), ['controller' => 'HistJobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Joints'), ['controller' => 'Joints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joint'), ['controller' => 'Joints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leave'), ['controller' => 'Leaves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Qualifications'), ['controller' => 'Qualifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qualification'), ['controller' => 'Qualifications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Town') ?></th>
            <td><?= $employee->has('town') ? $this->Html->link($employee->town->name, ['controller' => 'Towns', 'action' => 'view', $employee->town->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $employee->has('service') ? $this->Html->link($employee->service->name, ['controller' => 'Services', 'action' => 'view', $employee->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Level') ?></th>
            <td><?= $employee->has('school_level') ? $this->Html->link($employee->school_level->name, ['controller' => 'SchoolLevels', 'action' => 'view', $employee->school_level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civilitty') ?></th>
            <td><?= h($employee->civilitty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= h($employee->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($employee->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Laste Name') ?></th>
            <td><?= h($employee->laste_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maiden Name') ?></th>
            <td><?= h($employee->maiden_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presume') ?></th>
            <td><?= h($employee->presume) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name Father') ?></th>
            <td><?= h($employee->last_name_father) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name Mother') ?></th>
            <td><?= h($employee->first_name_mother) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name Mother') ?></th>
            <td><?= h($employee->last_name_mother) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fami Situation') ?></th>
            <td><?= h($employee->fami_situation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($employee->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($employee->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($employee->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Numbre') ?></th>
            <td><?= h($employee->phone_numbre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($employee->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality') ?></th>
            <td><?= h($employee->nationality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality Service') ?></th>
            <td><?= h($employee->nationality_service) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blood Group') ?></th>
            <td><?= h($employee->blood_group) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ccp Number') ?></th>
            <td><?= h($employee->ccp_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ss Number') ?></th>
            <td><?= h($employee->ss_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anem Number') ?></th>
            <td><?= h($employee->anem_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($employee->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbr Child') ?></th>
            <td><?= $this->Number->format($employee->nbr_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= $this->Number->format($employee->salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Birth') ?></th>
            <td><?= h($employee->date_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employee->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anem') ?></th>
            <td><?= $employee->anem ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Obs') ?></h4>
        <?= $this->Text->autoParagraph(h($employee->obs)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Abs Employees') ?></h4>
        <?php if (!empty($employee->abs_employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Absence Type Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Abs Start') ?></th>
                <th scope="col"><?= __('Date Abs End') ?></th>
                <th scope="col"><?= __('Motif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->abs_employees as $absEmployees): ?>
            <tr>
                <td><?= h($absEmployees->absence_type_id) ?></td>
                <td><?= h($absEmployees->employee_id) ?></td>
                <td><?= h($absEmployees->date_abs_start) ?></td>
                <td><?= h($absEmployees->date_abs_end) ?></td>
                <td><?= h($absEmployees->motif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AbsEmployees', 'action' => 'view', $absEmployees->absence_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AbsEmployees', 'action' => 'edit', $absEmployees->absence_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AbsEmployees', 'action' => 'delete', $absEmployees->absence_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $absEmployees->absence_type_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Consultations') ?></h4>
        <?php if (!empty($employee->consultations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultation Type Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Consultation') ?></th>
                <th scope="col"><?= __('Obs Consultation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->consultations as $consultations): ?>
            <tr>
                <td><?= h($consultations->id) ?></td>
                <td><?= h($consultations->consultation_type_id) ?></td>
                <td><?= h($consultations->employee_id) ?></td>
                <td><?= h($consultations->date_consultation) ?></td>
                <td><?= h($consultations->obs_consultation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emp Deplomes') ?></h4>
        <?php if (!empty($employee->emp_deplomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Deplome Id') ?></th>
                <th scope="col"><?= __('Date Deplome') ?></th>
                <th scope="col"><?= __('Place Deplome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->emp_deplomes as $empDeplomes): ?>
            <tr>
                <td><?= h($empDeplomes->employee_id) ?></td>
                <td><?= h($empDeplomes->deplome_id) ?></td>
                <td><?= h($empDeplomes->date_deplome) ?></td>
                <td><?= h($empDeplomes->place_deplome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmpDeplomes', 'action' => 'view', $empDeplomes->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmpDeplomes', 'action' => 'edit', $empDeplomes->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmpDeplomes', 'action' => 'delete', $empDeplomes->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $empDeplomes->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emp Documents') ?></h4>
        <?php if (!empty($employee->emp_documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Document Type Id') ?></th>
                <th scope="col"><?= __('Date Eta') ?></th>
                <th scope="col"><?= __('Date Exp') ?></th>
                <th scope="col"><?= __('Blob Doc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->emp_documents as $empDocuments): ?>
            <tr>
                <td><?= h($empDocuments->employee_id) ?></td>
                <td><?= h($empDocuments->document_type_id) ?></td>
                <td><?= h($empDocuments->date_eta) ?></td>
                <td><?= h($empDocuments->date_exp) ?></td>
                <td><?= h($empDocuments->blob_doc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmpDocuments', 'action' => 'view', $empDocuments->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmpDocuments', 'action' => 'edit', $empDocuments->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmpDocuments', 'action' => 'delete', $empDocuments->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $empDocuments->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employe Languages') ?></h4>
        <?php if (!empty($employee->employe_languages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Competance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->employe_languages as $employeLanguages): ?>
            <tr>
                <td><?= h($employeLanguages->employee_id) ?></td>
                <td><?= h($employeLanguages->language_id) ?></td>
                <td><?= h($employeLanguages->competance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployeLanguages', 'action' => 'view', $employeLanguages->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeLanguages', 'action' => 'edit', $employeLanguages->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeLanguages', 'action' => 'delete', $employeLanguages->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeLanguages->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Experiences') ?></h4>
        <?php if (!empty($employee->experiences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Experience') ?></th>
                <th scope="col"><?= __('Date Exp Start') ?></th>
                <th scope="col"><?= __('Date Exp End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->experiences as $experiences): ?>
            <tr>
                <td><?= h($experiences->id) ?></td>
                <td><?= h($experiences->employee_id) ?></td>
                <td><?= h($experiences->experience) ?></td>
                <td><?= h($experiences->date_exp_start) ?></td>
                <td><?= h($experiences->date_exp_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Experiences', 'action' => 'view', $experiences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Experiences', 'action' => 'edit', $experiences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Experiences', 'action' => 'delete', $experiences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hist Jobs') ?></h4>
        <?php if (!empty($employee->hist_jobs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Job Start') ?></th>
                <th scope="col"><?= __('Date Job End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->hist_jobs as $histJobs): ?>
            <tr>
                <td><?= h($histJobs->job_id) ?></td>
                <td><?= h($histJobs->employee_id) ?></td>
                <td><?= h($histJobs->date_job_start) ?></td>
                <td><?= h($histJobs->date_job_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HistJobs', 'action' => 'view', $histJobs->job_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HistJobs', 'action' => 'edit', $histJobs->job_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HistJobs', 'action' => 'delete', $histJobs->job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $histJobs->job_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Joints') ?></h4>
        <?php if (!empty($employee->joints)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Civility Join') ?></th>
                <th scope="col"><?= __('First Name Join') ?></th>
                <th scope="col"><?= __('Laste Name Join') ?></th>
                <th scope="col"><?= __('Date Birth Join') ?></th>
                <th scope="col"><?= __('Place Birth Join') ?></th>
                <th scope="col"><?= __('Sex Join') ?></th>
                <th scope="col"><?= __('Phone Number Join') ?></th>
                <th scope="col"><?= __('Emial Join') ?></th>
                <th scope="col"><?= __('Nationality Join') ?></th>
                <th scope="col"><?= __('Ccp Number Join') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->joints as $joints): ?>
            <tr>
                <td><?= h($joints->id) ?></td>
                <td><?= h($joints->employee_id) ?></td>
                <td><?= h($joints->civility_join) ?></td>
                <td><?= h($joints->first_name_join) ?></td>
                <td><?= h($joints->laste_name_join) ?></td>
                <td><?= h($joints->date_birth_join) ?></td>
                <td><?= h($joints->place_birth_join) ?></td>
                <td><?= h($joints->sex_join) ?></td>
                <td><?= h($joints->phone_number_join) ?></td>
                <td><?= h($joints->emial_join) ?></td>
                <td><?= h($joints->nationality_join) ?></td>
                <td><?= h($joints->ccp_number_join) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Joints', 'action' => 'view', $joints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Joints', 'action' => 'edit', $joints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Joints', 'action' => 'delete', $joints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Leaves') ?></h4>
        <?php if (!empty($employee->leaves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Leave Type Id') ?></th>
                <th scope="col"><?= __('Date Leave Start') ?></th>
                <th scope="col"><?= __('Date Leave End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->leaves as $leaves): ?>
            <tr>
                <td><?= h($leaves->id) ?></td>
                <td><?= h($leaves->employee_id) ?></td>
                <td><?= h($leaves->leave_type_id) ?></td>
                <td><?= h($leaves->date_leave_start) ?></td>
                <td><?= h($leaves->date_leave_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leaves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leaves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leaves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Qualifications') ?></h4>
        <?php if (!empty($employee->qualifications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Qualification') ?></th>
                <th scope="col"><?= __('Date Quali') ?></th>
                <th scope="col"><?= __('Place Quali') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->qualifications as $qualifications): ?>
            <tr>
                <td><?= h($qualifications->id) ?></td>
                <td><?= h($qualifications->employee_id) ?></td>
                <td><?= h($qualifications->qualification) ?></td>
                <td><?= h($qualifications->date_quali) ?></td>
                <td><?= h($qualifications->place_quali) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Qualifications', 'action' => 'view', $qualifications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Qualifications', 'action' => 'edit', $qualifications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Qualifications', 'action' => 'delete', $qualifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualifications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
