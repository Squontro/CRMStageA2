<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RaiseType[]|\Cake\Collection\CollectionInterface $raiseTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Raise Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raiseTypes index large-9 medium-8 columns content">
    <h3><?= __('Raise Types') ?></h3>
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
            <?php foreach ($raiseTypes as $raiseType): ?>
            <tr>
                <td><?= $this->Number->format($raiseType->id) ?></td>
                <td><?= h($raiseType->name) ?></td>
                <td><?= h($raiseType->created) ?></td>
                <td><?= h($raiseType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $raiseType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $raiseType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $raiseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raiseType->id)]) ?>
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
