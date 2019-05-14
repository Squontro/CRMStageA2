<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityType[]|\Cake\Collection\CollectionInterface $opportunityTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunity Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityTypes index large-9 medium-8 columns content">
    <h3><?= __('Opportunity Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunityTypes as $opportunityType): ?>
            <tr>
                <td><?= $this->Number->format($opportunityType->id) ?></td>
                <td><?= h($opportunityType->name) ?></td>
                <td><?= h($opportunityType->created) ?></td>
                <td><?= h($opportunityType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunityType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunityType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityType->id)]) ?>
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
