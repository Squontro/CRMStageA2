<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProspectStatusesReason $prospectStatusesReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prospect Statuses Reason'), ['action' => 'edit', $prospectStatusesReason->propsect_reason_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prospect Statuses Reason'), ['action' => 'delete', $prospectStatusesReason->propsect_reason_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospectStatusesReason->propsect_reason_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospect Reasons'), ['controller' => 'ProspectReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect Reason'), ['controller' => 'ProspectReasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prospectStatusesReasons view large-9 medium-8 columns content">
    <h3><?= h($prospectStatusesReason->propsect_reason_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Prospect') ?></th>
            <td><?= $prospectStatusesReason->has('prospect') ? $this->Html->link($prospectStatusesReason->prospect->name, ['controller' => 'Prospects', 'action' => 'view', $prospectStatusesReason->prospect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prospect Reason Id') ?></th>
            <td><?= $this->Number->format($prospectStatusesReason->prospect_reason_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($prospectStatusesReason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($prospectStatusesReason->modified) ?></td>
        </tr>
    </table>
</div>
