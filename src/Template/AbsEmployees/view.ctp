<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AbsEmployee $absEmployee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Abs Employee'), ['action' => 'edit', $absEmployee->absence_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Abs Employee'), ['action' => 'delete', $absEmployee->absence_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $absEmployee->absence_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abs Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abs Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Absence Types'), ['controller' => 'AbsenceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Absence Type'), ['controller' => 'AbsenceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="absEmployees view large-9 medium-8 columns content">
    <h3><?= h($absEmployee->absence_type_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Absence Type') ?></th>
            <td><?= $absEmployee->has('absence_type') ? $this->Html->link($absEmployee->absence_type->name, ['controller' => 'AbsenceTypes', 'action' => 'view', $absEmployee->absence_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $absEmployee->has('employee') ? $this->Html->link($absEmployee->employee->id, ['controller' => 'Employees', 'action' => 'view', $absEmployee->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motif') ?></th>
            <td><?= h($absEmployee->motif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Abs Start') ?></th>
            <td><?= h($absEmployee->date_abs_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Abs End') ?></th>
            <td><?= h($absEmployee->date_abs_end) ?></td>
        </tr>
    </table>
</div>
