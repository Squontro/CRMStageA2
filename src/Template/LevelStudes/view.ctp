<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LevelStude $levelStude
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level Stude'), ['action' => 'edit', $levelStude->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level Stude'), ['action' => 'delete', $levelStude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelStude->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Level Studes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level Stude'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Childs'), ['controller' => 'Childs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Childs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Levels'), ['controller' => 'SchoolLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Level'), ['controller' => 'SchoolLevels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levelStudes view large-9 medium-8 columns content">
    <h3><?= h($levelStude->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($levelStude->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($levelStude->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Childs') ?></h4>
        <?php if (!empty($levelStude->childs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Joint Id') ?></th>
                <th scope="col"><?= __('Level Stude Id') ?></th>
                <th scope="col"><?= __('Laste Name Child') ?></th>
                <th scope="col"><?= __('Date Birth Child') ?></th>
                <th scope="col"><?= __('Presume Child') ?></th>
                <th scope="col"><?= __('Place Birth Child') ?></th>
                <th scope="col"><?= __('Sex Child') ?></th>
                <th scope="col"><?= __('Alive Child') ?></th>
                <th scope="col"><?= __('Educated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($levelStude->childs as $childs): ?>
            <tr>
                <td><?= h($childs->id) ?></td>
                <td><?= h($childs->joint_id) ?></td>
                <td><?= h($childs->level_stude_id) ?></td>
                <td><?= h($childs->laste_name_child) ?></td>
                <td><?= h($childs->date_birth_child) ?></td>
                <td><?= h($childs->presume_child) ?></td>
                <td><?= h($childs->place_birth_child) ?></td>
                <td><?= h($childs->sex_child) ?></td>
                <td><?= h($childs->alive_child) ?></td>
                <td><?= h($childs->educated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Childs', 'action' => 'view', $childs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Childs', 'action' => 'edit', $childs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Childs', 'action' => 'delete', $childs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related School Levels') ?></h4>
        <?php if (!empty($levelStude->school_levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Level Stude Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($levelStude->school_levels as $schoolLevels): ?>
            <tr>
                <td><?= h($schoolLevels->id) ?></td>
                <td><?= h($schoolLevels->level_stude_id) ?></td>
                <td><?= h($schoolLevels->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SchoolLevels', 'action' => 'view', $schoolLevels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SchoolLevels', 'action' => 'edit', $schoolLevels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchoolLevels', 'action' => 'delete', $schoolLevels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolLevels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
