<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatusesReason $opportunityStatusesReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses Reasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityStatusesReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunityStatusesReason) ?>
    <fieldset>
        <legend><?= __('Add Opportunity Statuses Reason') ?></legend>
        <?php
            echo $this->Form->control('Opportunity_reasons_id', ['options' => $opportunityReasons]);
            echo $this->Form->control('Opportunity_id', ['options' => $opportunities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
