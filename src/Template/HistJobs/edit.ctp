<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistJob $histJob
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $histJob->job_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $histJob->job_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hist Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="histJobs form large-9 medium-8 columns content">
    <?= $this->Form->create($histJob) ?>
    <fieldset>
        <legend><?= __('Edit Hist Job') ?></legend>
        <?php
            echo $this->Form->control('date_job_start', ['empty' => true]);
            echo $this->Form->control('date_job_end', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
