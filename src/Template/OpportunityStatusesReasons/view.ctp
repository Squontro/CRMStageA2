<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatusesReason $opportunityStatusesReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity Statuses Reason'), ['action' => 'edit', $opportunityStatusesReason->opportunity_status_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Statuses Reason'), ['action' => 'delete', $opportunityStatusesReason->opportunity_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityStatusesReason->opportunity_status_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Statuses Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Statuses Reason'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunityStatusesReasons view large-9 medium-8 columns content">
    <h3><?= h($opportunityStatusesReason->opportunity_status_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Opportunity Reason') ?></th>
            <td><?= $opportunityStatusesReason->has('opportunity_reason') ? $this->Html->link($opportunityStatusesReason->opportunity_reason->reason_id, ['controller' => 'OpportunityReasons', 'action' => 'view', $opportunityStatusesReason->opportunity_reason->reason_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $opportunityStatusesReason->has('opportunity') ? $this->Html->link($opportunityStatusesReason->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityStatusesReason->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunityStatusesReason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunityStatusesReason->modified) ?></td>
        </tr>
    </table>
</div>
