<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child[]|\Cake\Collection\CollectionInterface $childs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Joints'), ['controller' => 'Joints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joint'), ['controller' => 'Joints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Level Studes'), ['controller' => 'LevelStudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level Stude'), ['controller' => 'LevelStudes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childs index large-9 medium-8 columns content">
    <h3><?= __('Childs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('joint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_stude_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('laste_name_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_birth_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presume_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_birth_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alive_child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($childs as $child): ?>
            <tr>
                <td><?= $this->Number->format($child->id) ?></td>
                <td><?= $child->has('joint') ? $this->Html->link($child->joint->id, ['controller' => 'Joints', 'action' => 'view', $child->joint->id]) : '' ?></td>
                <td><?= $child->has('level_stude') ? $this->Html->link($child->level_stude->name, ['controller' => 'LevelStudes', 'action' => 'view', $child->level_stude->id]) : '' ?></td>
                <td><?= h($child->laste_name_child) ?></td>
                <td><?= h($child->date_birth_child) ?></td>
                <td><?= h($child->presume_child) ?></td>
                <td><?= h($child->place_birth_child) ?></td>
                <td><?= h($child->sex_child) ?></td>
                <td><?= $this->Number->format($child->alive_child) ?></td>
                <td><?= $this->Number->format($child->educated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $child->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $child->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $child->id], ['confirm' => __('Are you sure you want to delete # {0}?', $child->id)]) ?>
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
