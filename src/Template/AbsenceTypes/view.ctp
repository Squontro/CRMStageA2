<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AbsenceType $absenceType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Absence Type'), ['action' => 'edit', $absenceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Absence Type'), ['action' => 'delete', $absenceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absenceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Absence Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Absence Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abs Employees'), ['controller' => 'AbsEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abs Employee'), ['controller' => 'AbsEmployees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="absenceTypes view large-9 medium-8 columns content">
    <h3><?= h($absenceType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($absenceType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($absenceType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Abs Employees') ?></h4>
        <?php if (!empty($absenceType->abs_employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Absence Type Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Abs Start') ?></th>
                <th scope="col"><?= __('Date Abs End') ?></th>
                <th scope="col"><?= __('Motif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($absenceType->abs_employees as $absEmployees): ?>
            <tr>
                <td><?= h($absEmployees->absence_type_id) ?></td>
                <td><?= h($absEmployees->employee_id) ?></td>
                <td><?= h($absEmployees->date_abs_start) ?></td>
                <td><?= h($absEmployees->date_abs_end) ?></td>
                <td><?= h($absEmployees->motif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AbsEmployees', 'action' => 'view', $absEmployees->absence_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AbsEmployees', 'action' => 'edit', $absEmployees->absence_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AbsEmployees', 'action' => 'delete', $absEmployees->absence_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $absEmployees->absence_type_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
