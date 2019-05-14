<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission[]|\Cake\Collection\CollectionInterface $permissions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Interfaces'), ['controller' => 'UserInterfaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Interface'), ['controller' => 'UserInterfaces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissions index large-9 medium-8 columns content">
    <h3><?= __('Permissions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_interface_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissions as $permission): ?>
            <tr>
                <td><?= $this->Number->format($permission->id) ?></td>
                <td><?= $permission->has('user_interface') ? $this->Html->link($permission->user_interface->name, ['controller' => 'UserInterfaces', 'action' => 'view', $permission->user_interface->id]) : '' ?></td>
                <td><?= $permission->has('action') ? $this->Html->link($permission->action->name, ['controller' => 'Actions', 'action' => 'view', $permission->action->id]) : '' ?></td>
                <td><?= $permission->has('profile') ? $this->Html->link($permission->profile->name, ['controller' => 'Profiles', 'action' => 'view', $permission->profile->id]) : '' ?></td>
                <td><?= h($permission->name) ?></td>
                <td><?= $this->Number->format($permission->permission) ?></td>
                <td><?= h($permission->created) ?></td>
                <td><?= h($permission->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $permission->user_interface_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permission->user_interface_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permission->user_interface_id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->user_interface_id)]) ?>
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
