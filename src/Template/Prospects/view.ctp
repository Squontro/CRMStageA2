<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prospect'), ['action' => 'edit', $prospect->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prospect'), ['action' => 'delete', $prospect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prospects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospect Statuses'), ['controller' => 'ProspectStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect Status'), ['controller' => 'ProspectStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['controller' => 'ProspectStatusesReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['controller' => 'ProspectStatusesReasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prospects view large-9 medium-8 columns content">
    <h3><?= h($prospect->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($prospect->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($prospect->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($prospect->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone Number') ?></th>
            <td><?= h($prospect->telephone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $prospect->has('user') ? $this->Html->link($prospect->user->name, ['controller' => 'Users', 'action' => 'view', $prospect->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $prospect->has('source') ? $this->Html->link($prospect->source->name, ['controller' => 'Sources', 'action' => 'view', $prospect->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prospect->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prospect Status Id') ?></th>
            <td><?= $this->Number->format($prospect->prospect_status_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($prospect->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($prospect->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Prospect Statuses Reasons') ?></h4>
        <?php if (!empty($prospect->prospect_statuses_reasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Propsect Reason Id') ?></th>
                <th scope="col"><?= __('Prospect Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prospect->prospect_statuses_reasons as $prospectStatusesReasons): ?>
            <tr>
                <td><?= h($prospectStatusesReasons->propsect_reason_id) ?></td>
                <td><?= h($prospectStatusesReasons->prospect_id) ?></td>
                <td><?= h($prospectStatusesReasons->created) ?></td>
                <td><?= h($prospectStatusesReasons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProspectStatusesReasons', 'action' => 'view', $prospectStatusesReasons->propsect_reason_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProspectStatusesReasons', 'action' => 'edit', $prospectStatusesReasons->propsect_reason_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProspectStatusesReasons', 'action' => 'delete', $prospectStatusesReasons->propsect_reason_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospectStatusesReasons->propsect_reason_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
