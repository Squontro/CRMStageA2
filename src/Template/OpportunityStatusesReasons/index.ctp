<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatusesReason[]|\Cake\Collection\CollectionInterface $opportunityStatusesReasons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunity Statuses Reason'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityStatusesReasons index large-9 medium-8 columns content">
    <h3><?= __('Opportunity Statuses Reasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('opportunity_reasons_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunityStatusesReasons as $opportunityStatusesReason): ?>
            <tr>
                <td><?= $opportunityStatusesReason->has('opportunity_reason') ? $this->Html->link($opportunityStatusesReason->opportunity_reason->reason_id, ['controller' => 'OpportunityReasons', 'action' => 'view', $opportunityStatusesReason->opportunity_reason->reason_id]) : '' ?></td>
                <td><?= $opportunityStatusesReason->has('opportunity') ? $this->Html->link($opportunityStatusesReason->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityStatusesReason->opportunity->id]) : '' ?></td>
                <td><?= h($opportunityStatusesReason->created) ?></td>
                <td><?= h($opportunityStatusesReason->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunityStatusesReason->opportunity_status_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunityStatusesReason->opportunity_status_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunityStatusesReason->opportunity_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityStatusesReason->opportunity_status_id)]) ?>
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
