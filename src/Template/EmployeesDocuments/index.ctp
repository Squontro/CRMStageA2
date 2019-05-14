<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDocument[]|\Cake\Collection\CollectionInterface $employeesDocuments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employees Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesDocuments index large-9 medium-8 columns content">
    <h3><?= __('Employees Documents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('document_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_eta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeesDocuments as $employeesDocument): ?>
            <tr>
                <td><?= $this->Number->format($employeesDocument->id) ?></td>
                <td><?= $employeesDocument->has('employee') ? $this->Html->link($employeesDocument->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeesDocument->employee->id]) : '' ?></td>
                <td><?= $employeesDocument->has('document_type') ? $this->Html->link($employeesDocument->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $employeesDocument->document_type->id]) : '' ?></td>
                <td><?= h($employeesDocument->date_eta) ?></td>
                <td><?= h($employeesDocument->date_exp) ?></td>
                <td><?= h($employeesDocument->image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeesDocument->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeesDocument->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeesDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDocument->id)]) ?>
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
