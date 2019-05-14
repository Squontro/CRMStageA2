<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistJob[]|\Cake\Collection\CollectionInterface $histJobs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hist Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="histJobs index large-9 medium-8 columns content">
    <h3><?= __('Hist Jobs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('job_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_job_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_job_end') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($histJobs as $histJob): ?>
            <tr>
                <td><?= $histJob->has('job') ? $this->Html->link($histJob->job->name, ['controller' => 'Jobs', 'action' => 'view', $histJob->job->id]) : '' ?></td>
                <td><?= $histJob->has('employee') ? $this->Html->link($histJob->employee->id, ['controller' => 'Employees', 'action' => 'view', $histJob->employee->id]) : '' ?></td>
                <td><?= h($histJob->date_job_start) ?></td>
                <td><?= h($histJob->date_job_end) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $histJob->job_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $histJob->job_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $histJob->job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $histJob->job_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
