<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDeplome $employeesDeplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employees Deplome'), ['action' => 'edit', $employeesDeplome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employees Deplome'), ['action' => 'delete', $employeesDeplome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDeplome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees Deplomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Deplome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deplomes'), ['controller' => 'Deplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deplome'), ['controller' => 'Deplomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeesDeplomes view large-9 medium-8 columns content">
    <h3><?= h($employeesDeplome->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $employeesDeplome->has('employee') ? $this->Html->link($employeesDeplome->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeesDeplome->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deplome') ?></th>
            <td><?= $employeesDeplome->has('deplome') ? $this->Html->link($employeesDeplome->deplome->name, ['controller' => 'Deplomes', 'action' => 'view', $employeesDeplome->deplome->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeesDeplome->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Deplome') ?></th>
            <td><?= h($employeesDeplome->date_deplome) ?></td>
        </tr>
    </table>
</div>
