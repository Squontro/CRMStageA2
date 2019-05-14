<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joint[]|\Cake\Collection\CollectionInterface $joints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Joint'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Childs'), ['controller' => 'Childs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Childs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joints index large-9 medium-8 columns content">
    <h3><?= __('Joints') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('civility_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('laste_name_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_birth_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_birth_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emial_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality_join') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ccp_number_join') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($joints as $joint): ?>
            <tr>
                <td><?= $this->Number->format($joint->id) ?></td>
                <td><?= $joint->has('employee') ? $this->Html->link($joint->employee->id, ['controller' => 'Employees', 'action' => 'view', $joint->employee->id]) : '' ?></td>
                <td><?= h($joint->civility_join) ?></td>
                <td><?= h($joint->first_name_join) ?></td>
                <td><?= h($joint->laste_name_join) ?></td>
                <td><?= h($joint->date_birth_join) ?></td>
                <td><?= h($joint->place_birth_join) ?></td>
                <td><?= h($joint->sex_join) ?></td>
                <td><?= h($joint->phone_number_join) ?></td>
                <td><?= h($joint->emial_join) ?></td>
                <td><?= h($joint->nationality_join) ?></td>
                <td><?= h($joint->ccp_number_join) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $joint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $joint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $joint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joint->id)]) ?>
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
