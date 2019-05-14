<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInterface $userInterface
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Interface'), ['action' => 'edit', $userInterface->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Interface'), ['action' => 'delete', $userInterface->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInterface->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Interfaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Interface'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userInterfaces view large-9 medium-8 columns content">
    <h3><?= h($userInterface->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($userInterface->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Section') ?></th>
            <td><?= $userInterface->has('section') ? $this->Html->link($userInterface->section->name, ['controller' => 'Sections', 'action' => 'view', $userInterface->section->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userInterface->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userInterface->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userInterface->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permissions') ?></h4>
        <?php if (!empty($userInterface->permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Interface Id') ?></th>
                <th scope="col"><?= __('Action Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Permission') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($userInterface->permissions as $permissions): ?>
            <tr>
                <td><?= h($permissions->user_interface_id) ?></td>
                <td><?= h($permissions->action_id) ?></td>
                <td><?= h($permissions->profile_id) ?></td>
                <td><?= h($permissions->name) ?></td>
                <td><?= h($permissions->permission) ?></td>
                <td><?= h($permissions->created) ?></td>
                <td><?= h($permissions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->user_interface_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->user_interface_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->user_interface_id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissions->user_interface_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
