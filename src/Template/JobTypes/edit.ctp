<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobType $jobType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jobType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($jobType) ?>
    <fieldset>
        <legend><?= __('Edit Job Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
