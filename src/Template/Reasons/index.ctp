<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reason[]|\Cake\Collection\CollectionInterface $reasons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reason'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reasons index large-9 medium-8 columns content">
    <h3><?= __('Reasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reasons as $reason): ?>
            <tr>
                <td><?= $this->Number->format($reason->id) ?></td>
                <td><?= h($reason->name) ?></td>
                <td><?= h($reason->creation_date) ?></td>
                <td><?= h($reason->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reason->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reason->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reason->id)]) ?>
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
