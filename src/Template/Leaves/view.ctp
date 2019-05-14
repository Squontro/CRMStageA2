<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Leave'), ['action' => 'edit', $leave->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leave'), ['action' => 'delete', $leave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leaves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leave'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leave Types'), ['controller' => 'LeaveTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leave Type'), ['controller' => 'LeaveTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="leaves view large-9 medium-8 columns content">
    <h3><?= h($leave->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $leave->has('employee') ? $this->Html->link($leave->employee->id, ['controller' => 'Employees', 'action' => 'view', $leave->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Leave Type') ?></th>
            <td><?= $leave->has('leave_type') ? $this->Html->link($leave->leave_type->name, ['controller' => 'LeaveTypes', 'action' => 'view', $leave->leave_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($leave->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Leave Start') ?></th>
            <td><?= h($leave->date_leave_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Leave End') ?></th>
            <td><?= h($leave->date_leave_end) ?></td>
        </tr>
    </table>
</div>
