<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wilaya[]|\Cake\Collection\CollectionInterface $wilayas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wilaya'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wilayas index large-9 medium-8 columns content">
    <h3><?= __('Wilayas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wilayas as $wilaya): ?>
            <tr>
                <td><?= $this->Number->format($wilaya->id) ?></td>
                <td><?= h($wilaya->name) ?></td>
                <td><?= $wilaya->has('country') ? $this->Html->link($wilaya->country->name, ['controller' => 'Countries', 'action' => 'view', $wilaya->country->id]) : '' ?></td>
                <td><?= h($wilaya->created) ?></td>
                <td><?= h($wilaya->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wilaya->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wilaya->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wilaya->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wilaya->id)]) ?>
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
