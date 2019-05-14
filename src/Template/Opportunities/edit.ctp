<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opportunity $opportunity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opportunity->id],
                ['confirm' => __('Are you sure you want to delete {0}?', $opportunity->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses'), ['controller' => 'OpportunityStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Status'), ['controller' => 'OpportunityStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Types'), ['controller' => 'OpportunityTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Type'), ['controller' => 'OpportunityTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['controller' => 'ContactOpportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['controller' => 'ContactOpportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['controller' => 'OpportunityProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['controller' => 'OpportunityProducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses Reasons'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Statuses Reason'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunities form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunity) ?>
    <fieldset>
        <legend><?= __('Edit Opportunity') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('date_begin');
            echo $this->Form->control('date_end_estimated', ['empty' => true]);
            echo $this->Form->control('budget');
            echo $this->Form->control('opportunity_status_id', ['options' => $opportunityStatuses]);
            echo $this->Form->control('opportunity_type_id', ['options' => $opportunityTypes]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('estimate_submitted', ['type' => 'checkbox', 'required' => 'false']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
