<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qualification $qualification
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Qualification'), ['action' => 'edit', $qualification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Qualification'), ['action' => 'delete', $qualification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Qualifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qualification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="qualifications view large-9 medium-8 columns content">
    <h3><?= h($qualification->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $qualification->has('employee') ? $this->Html->link($qualification->employee->id, ['controller' => 'Employees', 'action' => 'view', $qualification->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qualification') ?></th>
            <td><?= h($qualification->qualification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place Quali') ?></th>
            <td><?= h($qualification->place_quali) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($qualification->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Quali') ?></th>
            <td><?= h($qualification->date_quali) ?></td>
        </tr>
    </table>
</div>
