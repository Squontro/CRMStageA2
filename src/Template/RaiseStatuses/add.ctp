<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RaiseStatus $raiseStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Raise Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raiseStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($raiseStatus) ?>
    <fieldset>
        <legend><?= __('Add Raise Status') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
