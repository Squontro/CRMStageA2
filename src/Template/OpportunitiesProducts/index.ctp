<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunitiesProduct[]|\Cake\Collection\CollectionInterface $opportunitiesProducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunities Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunitiesProducts index large-9 medium-8 columns content">
    <h3><?= __('Opportunities Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunitiesProducts as $opportunitiesProduct): ?>
            <tr>
                <td><?= $this->Number->format($opportunitiesProduct->id) ?></td>
                <td><?= $opportunitiesProduct->has('opportunity') ? $this->Html->link($opportunitiesProduct->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunitiesProduct->opportunity->id]) : '' ?></td>
                <td><?= $opportunitiesProduct->has('product') ? $this->Html->link($opportunitiesProduct->product->name, ['controller' => 'Products', 'action' => 'view', $opportunitiesProduct->product->id]) : '' ?></td>
                <td><?= h($opportunitiesProduct->created) ?></td>
                <td><?= h($opportunitiesProduct->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunitiesProduct->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunitiesProduct->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunitiesProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunitiesProduct->id)]) ?>
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
