<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistJob $histJob
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hist Job'), ['action' => 'edit', $histJob->job_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hist Job'), ['action' => 'delete', $histJob->job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $histJob->job_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hist Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hist Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="histJobs view large-9 medium-8 columns content">
    <h3><?= h($histJob->job_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $histJob->has('job') ? $this->Html->link($histJob->job->name, ['controller' => 'Jobs', 'action' => 'view', $histJob->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $histJob->has('employee') ? $this->Html->link($histJob->employee->id, ['controller' => 'Employees', 'action' => 'view', $histJob->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Job Start') ?></th>
            <td><?= h($histJob->date_job_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Job End') ?></th>
            <td><?= h($histJob->date_job_end) ?></td>
        </tr>
    </table>
</div>
