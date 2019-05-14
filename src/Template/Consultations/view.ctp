<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultation $consultation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultation'), ['action' => 'edit', $consultation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultation'), ['action' => 'delete', $consultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultation Types'), ['controller' => 'ConsultationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation Type'), ['controller' => 'ConsultationTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultations view large-9 medium-8 columns content">
    <h3><?= h($consultation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consultation Type') ?></th>
            <td><?= $consultation->has('consultation_type') ? $this->Html->link($consultation->consultation_type->name, ['controller' => 'ConsultationTypes', 'action' => 'view', $consultation->consultation_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $consultation->has('employee') ? $this->Html->link($consultation->employee->id, ['controller' => 'Employees', 'action' => 'view', $consultation->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Obs Consultation') ?></th>
            <td><?= h($consultation->obs_consultation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Consultation') ?></th>
            <td><?= h($consultation->date_consultation) ?></td>
        </tr>
    </table>
</div>
