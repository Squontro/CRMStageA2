<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityReason $opportunityReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity Reason'), ['action' => 'edit', $opportunityReason->reason_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Reason'), ['action' => 'delete', $opportunityReason->reason_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityReason->reason_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunityReasons view large-9 medium-8 columns content">
    <h3><?= h($opportunityReason->reason_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($opportunityReason->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opportunityReason->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunityReason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunityReason->modified) ?></td>
        </tr>
    </table>
</div>
