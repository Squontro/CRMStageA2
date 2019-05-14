<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserParameter $userParameter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Parameter'), ['action' => 'edit', $userParameter->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Parameter'), ['action' => 'delete', $userParameter->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userParameter->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Parameters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Parameter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parameters'), ['controller' => 'Parameters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parameter'), ['controller' => 'Parameters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userParameters view large-9 medium-8 columns content">
    <h3><?= h($userParameter->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userParameter->has('user') ? $this->Html->link($userParameter->user->name, ['controller' => 'Users', 'action' => 'view', $userParameter->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parameter') ?></th>
            <td><?= $userParameter->has('parameter') ? $this->Html->link($userParameter->parameter->name, ['controller' => 'Parameters', 'action' => 'view', $userParameter->parameter->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($userParameter->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userParameter->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userParameter->modified) ?></td>
        </tr>
    </table>
</div>
