<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Daira $daira
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Daira'), ['action' => 'edit', $daira->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Daira'), ['action' => 'delete', $daira->id], ['confirm' => __('Are you sure you want to delete # {0}?', $daira->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dairas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daira'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wilayas'), ['controller' => 'Wilayas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wilaya'), ['controller' => 'Wilayas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dairas view large-9 medium-8 columns content">
    <h3><?= h($daira->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wilaya') ?></th>
            <td><?= $daira->has('wilaya') ? $this->Html->link($daira->wilaya->name, ['controller' => 'Wilayas', 'action' => 'view', $daira->wilaya->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($daira->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($daira->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Towns') ?></h4>
        <?php if (!empty($daira->towns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Daira Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($daira->towns as $towns): ?>
            <tr>
                <td><?= h($towns->id) ?></td>
                <td><?= h($towns->daira_id) ?></td>
                <td><?= h($towns->name) ?></td>
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
