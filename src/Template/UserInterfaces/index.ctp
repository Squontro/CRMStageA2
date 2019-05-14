<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInterface[]|\Cake\Collection\CollectionInterface $userInterfaces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Interface'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userInterfaces index large-9 medium-8 columns content">
    <h3><?= __('User Interfaces') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('section_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userInterfaces as $userInterface): ?>
            <tr>
                <td><?= $this->Number->format($userInterface->id) ?></td>
                <td><?= h($userInterface->name) ?></td>
                <td><?= $userInterface->has('section') ? $this->Html->link($userInterface->section->name, ['controller' => 'Sections', 'action' => 'view', $userInterface->section->id]) : '' ?></td>
                <td><?= h($userInterface->created) ?></td>
                <td><?= h($userInterface->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userInterface->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userInterface->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userInterface->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInterface->id)]) ?>
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
