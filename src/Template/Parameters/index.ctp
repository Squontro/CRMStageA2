<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parameter[]|\Cake\Collection\CollectionInterface $parameters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parameter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parameter Types'), ['controller' => 'ParameterTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parameter Type'), ['controller' => 'ParameterTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Parameters'), ['controller' => 'UserParameters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Parameter'), ['controller' => 'UserParameters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parameters index large-9 medium-8 columns content">
    <h3><?= __('Parameters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parameter_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parameters as $parameter): ?>
            <tr>
                <td><?= $this->Number->format($parameter->id) ?></td>
                <td><?= h($parameter->name) ?></td>
                <td><?= h($parameter->code) ?></td>
                <td><?= $parameter->has('parameter_type') ? $this->Html->link($parameter->parameter_type->name, ['controller' => 'ParameterTypes', 'action' => 'view', $parameter->parameter_type->id]) : '' ?></td>
                <td><?= h($parameter->created) ?></td>
                <td><?= h($parameter->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parameter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parameter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parameter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parameter->id)]) ?>
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
