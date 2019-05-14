<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProspectStatusesReason[]|\Cake\Collection\CollectionInterface $prospectStatusesReasons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Reasons'), ['controller' => 'ProspectReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Reason'), ['controller' => 'ProspectReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospectStatusesReasons index large-9 medium-8 columns content">
    <h3><?= __('Prospect Statuses Reasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('prospect_reason_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prospect_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prospectStatusesReasons as $prospectStatusesReason): ?>
            <tr>
                <td><?= $this->Number->format($prospectStatusesReason->prospect_reason_id) ?></td>
                <td><?= $prospectStatusesReason->has('prospect') ? $this->Html->link($prospectStatusesReason->prospect->name, ['controller' => 'Prospects', 'action' => 'view', $prospectStatusesReason->prospect->id]) : '' ?></td>
                <td><?= h($prospectStatusesReason->created) ?></td>
                <td><?= h($prospectStatusesReason->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prospectStatusesReason->propsect_reason_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prospectStatusesReason->propsect_reason_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prospectStatusesReason->propsect_reason_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospectStatusesReason->propsect_reason_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
