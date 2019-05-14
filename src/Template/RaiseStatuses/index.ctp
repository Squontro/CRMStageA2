<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RaiseStatus[]|\Cake\Collection\CollectionInterface $raiseStatuses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Raise Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raiseStatuses index large-9 medium-8 columns content">
    <h3><?= __('Raise Statuses') ?></h3>
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
            <?php foreach ($raiseStatuses as $raiseStatus): ?>
            <tr>
                <td><?= $this->Number->format($raiseStatus->id) ?></td>
                <td><?= h($raiseStatus->name) ?></td>
                <td><?= h($raiseStatus->created) ?></td>
                <td><?= h($raiseStatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $raiseStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $raiseStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $raiseStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raiseStatus->id)]) ?>
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
