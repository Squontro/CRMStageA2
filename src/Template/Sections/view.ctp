<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Section'), ['action' => 'edit', $section->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Section'), ['action' => 'delete', $section->id], ['confirm' => __('Are you sure you want to delete # {0}?', $section->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Section'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Interfaces'), ['controller' => 'UserInterfaces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Interface'), ['controller' => 'UserInterfaces', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sections view large-9 medium-8 columns content">
    <h3><?= h($section->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($section->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($section->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($section->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($section->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Interfaces') ?></h4>
        <?php if (!empty($section->user_interfaces)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Section Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($section->user_interfaces as $userInterfaces): ?>
            <tr>
                <td><?= h($userInterfaces->id) ?></td>
                <td><?= h($userInterfaces->name) ?></td>
                <td><?= h($userInterfaces->section_id) ?></td>
                <td><?= h($userInterfaces->created) ?></td>
                <td><?= h($userInterfaces->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserInterfaces', 'action' => 'view', $userInterfaces->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserInterfaces', 'action' => 'edit', $userInterfaces->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserInterfaces', 'action' => 'delete', $userInterfaces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInterfaces->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
