<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Raise $raise
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Raise Types'), ['controller' => 'RaiseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise Type'), ['controller' => 'RaiseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raise Statuses'), ['controller' => 'RaiseStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise Status'), ['controller' => 'RaiseStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raises form large-9 medium-8 columns content">
    <?= $this->Form->create($raise) ?>
    <fieldset>
        <legend><?= __('Add Raise') ?></legend>
        <?php
            echo $this->Form->control('date_notification');
            echo $this->Form->control('raise_type_id', ['options' => $raiseTypes]);
            echo $this->Form->control('opportunity_id', ['options' => $opportunities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
