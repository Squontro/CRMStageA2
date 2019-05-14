<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunitiesProduct $opportunitiesProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunities Product'), ['action' => 'edit', $opportunitiesProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunities Product'), ['action' => 'delete', $opportunitiesProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunitiesProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunities Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunitiesProducts view large-9 medium-8 columns content">
    <h3><?= h($opportunitiesProduct->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $opportunitiesProduct->has('opportunity') ? $this->Html->link($opportunitiesProduct->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunitiesProduct->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $opportunitiesProduct->has('product') ? $this->Html->link($opportunitiesProduct->product->name, ['controller' => 'Products', 'action' => 'view', $opportunitiesProduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opportunitiesProduct->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunitiesProduct->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunitiesProduct->modified) ?></td>
        </tr>
    </table>
</div>
