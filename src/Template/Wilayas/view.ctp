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
        <li><?= $this->Html->link(__('List Dairas'), ['controller' => 'Dairas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daira'), ['controller' => 'Dairas', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wilaya->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dairas') ?></h4>
        <?php if (!empty($wilaya->dairas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wilaya Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wilaya->dairas as $dairas): ?>
            <tr>
                <td><?= h($dairas->id) ?></td>
                <td><?= h($dairas->wilaya_id) ?></td>
                <td><?= h($dairas->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dairas', 'action' => 'view', $dairas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dairas', 'action' => 'edit', $dairas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dairas', 'action' => 'delete', $dairas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dairas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
