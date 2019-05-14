<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LevelStude $levelStude
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $levelStude->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $levelStude->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Level Studes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Childs'), ['controller' => 'Childs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Childs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Levels'), ['controller' => 'SchoolLevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Level'), ['controller' => 'SchoolLevels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levelStudes form large-9 medium-8 columns content">
    <?= $this->Form->create($levelStude) ?>
    <fieldset>
        <legend><?= __('Edit Level Stude') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
