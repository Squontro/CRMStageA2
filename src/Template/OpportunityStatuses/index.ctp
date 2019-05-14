<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatus[]|\Cake\Collection\CollectionInterface $opportunityStatuses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunity Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityStatuses index large-9 medium-8 columns content">
    <h3><?= __('Opportunity Statuses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunityStatuses as $opportunityStatus): ?>
            <tr>
                <td><?= $this->Number->format($opportunityStatus->id) ?></td>
                <td><?= h($opportunityStatus->name) ?></td>
                <td><?= h($opportunityStatus->created) ?></td>
                <td><?= h($opportunityStatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunityStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunityStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunityStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityStatus->id)]) ?>
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
