<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityProduct $opportunityProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity Product'), ['action' => 'edit', $opportunityProduct->opportunity_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Product'), ['action' => 'delete', $opportunityProduct->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityProduct->opportunity_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunityProducts view large-9 medium-8 columns content">
    <h3><?= h($opportunityProduct->opportunity_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $opportunityProduct->has('opportunity') ? $this->Html->link($opportunityProduct->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityProduct->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $opportunityProduct->has('product') ? $this->Html->link($opportunityProduct->product->name, ['controller' => 'Products', 'action' => 'view', $opportunityProduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunityProduct->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunityProduct->modified) ?></td>
        </tr>
    </table>
</div>
