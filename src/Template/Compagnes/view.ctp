<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compagne $compagne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compagne'), ['action' => 'edit', $compagne->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compagne'), ['action' => 'delete', $compagne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compagne->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compagnes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compagne'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compagnes view large-9 medium-8 columns content">
    <h3><?= h($compagne->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($compagne->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress Comp') ?></th>
            <td><?= h($compagne->adress_comp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($compagne->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax Comp') ?></th>
            <td><?= h($compagne->fax_comp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Comp') ?></th>
            <td><?= h($compagne->email_comp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site Web') ?></th>
            <td><?= h($compagne->site_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($compagne->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compagne->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($compagne->departments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Compagne Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($compagne->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->compagne_id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
