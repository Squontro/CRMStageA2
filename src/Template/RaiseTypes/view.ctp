<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RaiseType $raiseType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Raise Type'), ['action' => 'edit', $raiseType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Raise Type'), ['action' => 'delete', $raiseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raiseType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Raise Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="raiseTypes view large-9 medium-8 columns content">
    <h3><?= h($raiseType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($raiseType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($raiseType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($raiseType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($raiseType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Raises') ?></h4>
        <?php if (!empty($raiseType->raises)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Date Begin') ?></th>
                <th scope="col"><?= __('Date End') ?></th>
                <th scope="col"><?= __('Raise Type Id') ?></th>
                <th scope="col"><?= __('Raise Status Id') ?></th>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($raiseType->raises as $raises): ?>
            <tr>
                <td><?= h($raises->id) ?></td>
                <td><?= h($raises->name) ?></td>
                <td><?= h($raises->date_begin) ?></td>
                <td><?= h($raises->date_end) ?></td>
                <td><?= h($raises->raise_type_id) ?></td>
                <td><?= h($raises->raise_status_id) ?></td>
                <td><?= h($raises->opportunity_id) ?></td>
                <td><?= h($raises->created) ?></td>
                <td><?= h($raises->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Raises', 'action' => 'view', $raises->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Raises', 'action' => 'edit', $raises->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Raises', 'action' => 'delete', $raises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raises->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
