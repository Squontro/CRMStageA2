<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultation[]|\Cake\Collection\CollectionInterface $consultations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultation Types'), ['controller' => 'ConsultationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation Type'), ['controller' => 'ConsultationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultations index large-9 medium-8 columns content">
    <h3><?= __('Consultations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultation_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_consultation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obs_consultation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultations as $consultation): ?>
            <tr>
                <td><?= $this->Number->format($consultation->id) ?></td>
                <td><?= $consultation->has('consultation_type') ? $this->Html->link($consultation->consultation_type->name, ['controller' => 'ConsultationTypes', 'action' => 'view', $consultation->consultation_type->id]) : '' ?></td>
                <td><?= $consultation->has('employee') ? $this->Html->link($consultation->employee->id, ['controller' => 'Employees', 'action' => 'view', $consultation->employee->id]) : '' ?></td>
                <td><?= h($consultation->date_consultation) ?></td>
                <td><?= h($consultation->obs_consultation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?>
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
