<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatus $opportunityStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunityStatus) ?>
    <fieldset>
        <legend><?= __('Add Opportunity Status') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
