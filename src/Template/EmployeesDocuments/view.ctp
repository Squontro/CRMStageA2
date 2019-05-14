<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDocument $employeesDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employees Document'), ['action' => 'edit', $employeesDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employees Document'), ['action' => 'delete', $employeesDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeesDocuments view large-9 medium-8 columns content">
    <h3><?= h($employeesDocument->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $employeesDocument->has('employee') ? $this->Html->link($employeesDocument->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeesDocument->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document Type') ?></th>
            <td><?= $employeesDocument->has('document_type') ? $this->Html->link($employeesDocument->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $employeesDocument->document_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($employeesDocument->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeesDocument->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Eta') ?></th>
            <td><?= h($employeesDocument->date_eta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Exp') ?></th>
            <td><?= h($employeesDocument->date_exp) ?></td>
        </tr>
    </table>
</div>
