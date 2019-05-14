<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Child $child
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Child'), ['action' => 'edit', $child->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Child'), ['action' => 'delete', $child->id], ['confirm' => __('Are you sure you want to delete # {0}?', $child->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Childs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Joints'), ['controller' => 'Joints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joint'), ['controller' => 'Joints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Level Studes'), ['controller' => 'LevelStudes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level Stude'), ['controller' => 'LevelStudes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="childs view large-9 medium-8 columns content">
    <h3><?= h($child->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Joint') ?></th>
            <td><?= $child->has('joint') ? $this->Html->link($child->joint->id, ['controller' => 'Joints', 'action' => 'view', $child->joint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level Stude') ?></th>
            <td><?= $child->has('level_stude') ? $this->Html->link($child->level_stude->name, ['controller' => 'LevelStudes', 'action' => 'view', $child->level_stude->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Laste Name Child') ?></th>
            <td><?= h($child->laste_name_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presume Child') ?></th>
            <td><?= h($child->presume_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place Birth Child') ?></th>
            <td><?= h($child->place_birth_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex Child') ?></th>
            <td><?= h($child->sex_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($child->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alive Child') ?></th>
            <td><?= $this->Number->format($child->alive_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educated') ?></th>
            <td><?= $this->Number->format($child->educated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Birth Child') ?></th>
            <td><?= h($child->date_birth_child) ?></td>
        </tr>
    </table>
</div>
