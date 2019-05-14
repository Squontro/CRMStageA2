<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParameterType $parameterType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parameter Type'), ['action' => 'edit', $parameterType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parameter Type'), ['action' => 'delete', $parameterType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parameterType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parameter Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parameter Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parameters'), ['controller' => 'Parameters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parameter'), ['controller' => 'Parameters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parameterTypes view large-9 medium-8 columns content">
    <h3><?= h($parameterType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($parameterType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parameterType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($parameterType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($parameterType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Parameters') ?></h4>
        <?php if (!empty($parameterType->parameters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Parameter Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($parameterType->parameters as $parameters): ?>
            <tr>
                <td><?= h($parameters->id) ?></td>
                <td><?= h($parameters->name) ?></td>
                <td><?= h($parameters->code) ?></td>
                <td><?= h($parameters->parameter_type_id) ?></td>
                <td><?= h($parameters->created) ?></td>
                <td><?= h($parameters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Parameters', 'action' => 'view', $parameters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Parameters', 'action' => 'edit', $parameters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Parameters', 'action' => 'delete', $parameters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parameters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
