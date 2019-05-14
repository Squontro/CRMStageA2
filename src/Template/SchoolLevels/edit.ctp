<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolLevel $schoolLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolLevel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Level Studes'), ['controller' => 'LevelStudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level Stude'), ['controller' => 'LevelStudes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolLevel) ?>
    <fieldset>
        <legend><?= __('Edit School Level') ?></legend>
        <?php
            echo $this->Form->control('level_stude_id', ['options' => $levelStudes]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
