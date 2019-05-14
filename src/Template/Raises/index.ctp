<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Raise[]|\Cake\Collection\CollectionInterface $raises
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raise Types'), ['controller' => 'RaiseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise Type'), ['controller' => 'RaiseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raise Statuses'), ['controller' => 'RaiseStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise Status'), ['controller' => 'RaiseStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raises index large-9 medium-8 columns content">
    <h3><?= __('Raises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_notification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raise_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raise_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($raises as $raise): ?>
            <tr>
                <td><?= $this->Number->format($raise->id) ?></td>
                <td><?= h($raise->date_notification) ?></td>
                <td><?= $raise->has('raise_type') ? $this->Html->link($raise->raise_type->name, ['controller' => 'RaiseTypes', 'action' => 'view', $raise->raise_type->id]) : '' ?></td>
                <td><?= $raise->has('raise_status') ? $this->Html->link($raise->raise_status->name, ['controller' => 'RaiseStatuses', 'action' => 'view', $raise->raise_status->id]) : '' ?></td>
                <td><?= $raise->has('opportunity') ? $this->Html->link($raise->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $raise->opportunity->id]) : '' ?></td>
                <td><?= h($raise->created) ?></td>
                <td><?= h($raise->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $raise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $raise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $raise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raise->id)]) ?>
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
