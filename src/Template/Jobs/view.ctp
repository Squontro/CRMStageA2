<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hist Jobs'), ['controller' => 'HistJobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hist Job'), ['controller' => 'HistJobs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Job Type') ?></th>
            <td><?= $job->has('job_type') ? $this->Html->link($job->job_type->name, ['controller' => 'JobTypes', 'action' => 'view', $job->job_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($job->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Salar') ?></th>
            <td><?= $this->Number->format($job->max_salar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Salar') ?></th>
            <td><?= $this->Number->format($job->min_salar) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hist Jobs') ?></h4>
        <?php if (!empty($job->hist_jobs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Job Start') ?></th>
                <th scope="col"><?= __('Date Job End') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->hist_jobs as $histJobs): ?>
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
</div>
