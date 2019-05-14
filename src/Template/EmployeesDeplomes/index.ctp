<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDeplome[]|\Cake\Collection\CollectionInterface $employeesDeplomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employees Deplome'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deplomes'), ['controller' => 'Deplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Deplome'), ['controller' => 'Deplomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesDeplomes index large-9 medium-8 columns content">
    <h3><?= __('Employees Deplomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deplome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_deplome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeesDeplomes as $employeesDeplome): ?>
            <tr>
                <td><?= $this->Number->format($employeesDeplome->id) ?></td>
                <td><?= $employeesDeplome->has('employee') ? $this->Html->link($employeesDeplome->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeesDeplome->employee->id]) : '' ?></td>
                <td><?= $employeesDeplome->has('deplome') ? $this->Html->link($employeesDeplome->deplome->name, ['controller' => 'Deplomes', 'action' => 'view', $employeesDeplome->deplome->id]) : '' ?></td>
                <td><?= h($employeesDeplome->date_deplome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeesDeplome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeesDeplome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeesDeplome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDeplome->id)]) ?>
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
