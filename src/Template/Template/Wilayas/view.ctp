<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wilaya $wilaya
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wilaya'), ['action' => 'edit', $wilaya->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wilaya'), ['action' => 'delete', $wilaya->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wilaya->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wilayas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wilaya'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wilayas view large-9 medium-8 columns content">
    <h3><?= h($wilaya->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($wilaya->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $wilaya->has('country') ? $this->Html->link($wilaya->country->name, ['controller' => 'Countries', 'action' => 'view', $wilaya->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wilaya->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($wilaya->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($wilaya->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Towns') ?></h4>
        <?php if (!empty($wilaya->towns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Postal Code') ?></th>
                <th scope="col"><?= __('Wilaya Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wilaya->towns as $towns): ?>
            <tr>
                <td><?= h($towns->id) ?></td>
                <td><?= h($towns->name) ?></td>
                <td><?= h($towns->postal_code) ?></td>
                <td><?= h($towns->wilaya_id) ?></td>
                <td><?= h($towns->created) ?></td>
                <td><?= h($towns->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Towns', 'action' => 'view', $towns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Towns', 'action' => 'edit', $towns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Towns', 'action' => 'delete', $towns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $towns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
