<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qualification[]|\Cake\Collection\CollectionInterface $qualifications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Qualification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualifications index large-9 medium-8 columns content">
    <h3><?= __('Qualifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qualification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_quali') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_quali') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($qualifications as $qualification): ?>
            <tr>
                <td><?= $this->Number->format($qualification->id) ?></td>
                <td><?= $qualification->has('employee') ? $this->Html->link($qualification->employee->id, ['controller' => 'Employees', 'action' => 'view', $qualification->employee->id]) : '' ?></td>
                <td><?= h($qualification->qualification) ?></td>
                <td><?= h($qualification->date_quali) ?></td>
                <td><?= h($qualification->place_quali) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $qualification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qualification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qualification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualification->id)]) ?>
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
