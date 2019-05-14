<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child $child
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Childs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Joints'), ['controller' => 'Joints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joint'), ['controller' => 'Joints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Level Studes'), ['controller' => 'LevelStudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level Stude'), ['controller' => 'LevelStudes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childs form large-9 medium-8 columns content">
    <?= $this->Form->create($child) ?>
    <fieldset>
        <legend><?= __('Add Child') ?></legend>
        <?php
            echo $this->Form->control('level_stude_id', ['options' => $levelStudes]);
            echo $this->Form->control('laste_name_child');
            echo $this->Form->control('date_birth_child', ['empty' => true]);
            echo $this->Form->control('presume_child');
            echo $this->Form->control('place_birth_child');
            echo $this->Form->control('sex_child');
            echo $this->Form->control('alive_child');
            echo $this->Form->control('educated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
