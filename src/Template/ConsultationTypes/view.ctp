<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsultationType $consultationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultation Type'), ['action' => 'edit', $consultationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultation Type'), ['action' => 'delete', $consultationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultation Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultationTypes view large-9 medium-8 columns content">
    <h3><?= h($consultationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($consultationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultationType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultations') ?></h4>
        <?php if (!empty($consultationType->consultations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultation Type Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Date Consultation') ?></th>
                <th scope="col"><?= __('Obs Consultation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultationType->consultations as $consultations): ?>
            <tr>
                <td><?= h($consultations->id) ?></td>
                <td><?= h($consultations->consultation_type_id) ?></td>
                <td><?= h($consultations->employee_id) ?></td>
                <td><?= h($consultations->date_consultation) ?></td>
                <td><?= h($consultations->obs_consultation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
