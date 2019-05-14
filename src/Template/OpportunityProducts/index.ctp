<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityProduct[]|\Cake\Collection\CollectionInterface $opportunityProducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityProducts index large-9 medium-8 columns content">
    <h3><?= __('Opportunity Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunityProducts as $opportunityProduct): ?>
            <tr>
                <td><?= $opportunityProduct->has('opportunity') ? $this->Html->link($opportunityProduct->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityProduct->opportunity->id]) : '' ?></td>
                <td><?= $opportunityProduct->has('product') ? $this->Html->link($opportunityProduct->product->name, ['controller' => 'Products', 'action' => 'view', $opportunityProduct->product->id]) : '' ?></td>
                <td><?= h($opportunityProduct->created) ?></td>
                <td><?= h($opportunityProduct->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunityProduct->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunityProduct->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunityProduct->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityProduct->opportunity_id)]) ?>
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
