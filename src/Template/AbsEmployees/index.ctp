<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AbsEmployee[]|\Cake\Collection\CollectionInterface $absEmployees
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Abs Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Absence Types'), ['controller' => 'AbsenceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Absence Type'), ['controller' => 'AbsenceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="absEmployees index large-9 medium-8 columns content">
    <h3><?= __('Abs Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('absence_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_abs_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_abs_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($absEmployees as $absEmployee): ?>
            <tr>
                <td><?= $absEmployee->has('absence_type') ? $this->Html->link($absEmployee->absence_type->name, ['controller' => 'AbsenceTypes', 'action' => 'view', $absEmployee->absence_type->id]) : '' ?></td>
                <td><?= $absEmployee->has('employee') ? $this->Html->link($absEmployee->employee->id, ['controller' => 'Employees', 'action' => 'view', $absEmployee->employee->id]) : '' ?></td>
                <td><?= h($absEmployee->date_abs_start) ?></td>
                <td><?= h($absEmployee->date_abs_end) ?></td>
                <td><?= h($absEmployee->motif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $absEmployee->absence_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absEmployee->absence_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $absEmployee->absence_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $absEmployee->absence_type_id)]) ?>
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
