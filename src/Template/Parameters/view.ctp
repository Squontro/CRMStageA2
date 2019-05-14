<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parameter $parameter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parameter'), ['action' => 'edit', $parameter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parameter'), ['action' => 'delete', $parameter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parameter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parameters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parameter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parameter Types'), ['controller' => 'ParameterTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parameter Type'), ['controller' => 'ParameterTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Parameters'), ['controller' => 'UserParameters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Parameter'), ['controller' => 'UserParameters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parameters view large-9 medium-8 columns content">
    <h3><?= h($parameter->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($parameter->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($parameter->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parameter Type') ?></th>
            <td><?= $parameter->has('parameter_type') ? $this->Html->link($parameter->parameter_type->name, ['controller' => 'ParameterTypes', 'action' => 'view', $parameter->parameter_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parameter->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($parameter->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($parameter->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Parameters') ?></h4>
        <?php if (!empty($parameter->user_parameters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Parameter Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($parameter->user_parameters as $userParameters): ?>
            <tr>
                <td><?= h($userParameters->user_id) ?></td>
                <td><?= h($userParameters->parameter_id) ?></td>
                <td><?= h($userParameters->value) ?></td>
                <td><?= h($userParameters->created) ?></td>
                <td><?= h($userParameters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserParameters', 'action' => 'view', $userParameters->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserParameters', 'action' => 'edit', $userParameters->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserParameters', 'action' => 'delete', $userParameters->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userParameters->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
