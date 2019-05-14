<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $job->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hist Jobs'), ['controller' => 'HistJobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hist Job'), ['controller' => 'HistJobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->control('job_type_id', ['options' => $jobTypes, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('max_salar');
            echo $this->Form->control('min_salar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
