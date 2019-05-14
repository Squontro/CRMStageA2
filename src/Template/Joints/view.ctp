<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joint $joint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Joint'), ['action' => 'edit', $joint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Joint'), ['action' => 'delete', $joint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Joints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joint'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Childs'), ['controller' => 'Childs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Childs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="joints view large-9 medium-8 columns content">
    <h3><?= h($joint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $joint->has('employee') ? $this->Html->link($joint->employee->id, ['controller' => 'Employees', 'action' => 'view', $joint->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civility Join') ?></th>
            <td><?= h($joint->civility_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name Join') ?></th>
            <td><?= h($joint->first_name_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Laste Name Join') ?></th>
            <td><?= h($joint->laste_name_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place Birth Join') ?></th>
            <td><?= h($joint->place_birth_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex Join') ?></th>
            <td><?= h($joint->sex_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number Join') ?></th>
            <td><?= h($joint->phone_number_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emial Join') ?></th>
            <td><?= h($joint->emial_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality Join') ?></th>
            <td><?= h($joint->nationality_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ccp Number Join') ?></th>
            <td><?= h($joint->ccp_number_join) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($joint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Birth Join') ?></th>
            <td><?= h($joint->date_birth_join) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Childs') ?></h4>
        <?php if (!empty($joint->childs)): ?>
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
            <?php foreach ($joint->childs as $childs): ?>
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
</div>
