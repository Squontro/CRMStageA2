<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Raise $raise
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Raise'), ['action' => 'edit', $raise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Raise'), ['action' => 'delete', $raise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Raises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Raise Types'), ['controller' => 'RaiseTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise Type'), ['controller' => 'RaiseTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Raise Statuses'), ['controller' => 'RaiseStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise Status'), ['controller' => 'RaiseStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="raises view large-9 medium-8 columns content">
    <h3><?= h($raise->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Raise Type') ?></th>
            <td><?= $raise->has('raise_type') ? $this->Html->link($raise->raise_type->name, ['controller' => 'RaiseTypes', 'action' => 'view', $raise->raise_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raise Status') ?></th>
            <td><?= $raise->has('raise_status') ? $this->Html->link($raise->raise_status->name, ['controller' => 'RaiseStatuses', 'action' => 'view', $raise->raise_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $raise->has('opportunity') ? $this->Html->link($raise->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $raise->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($raise->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Notification') ?></th>
            <td><?= h($raise->date_notification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($raise->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($raise->modified) ?></td>
        </tr>
    </table>
</div>
