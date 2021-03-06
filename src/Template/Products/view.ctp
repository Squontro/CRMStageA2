<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['controller' => 'OpportunityProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['controller' => 'OpportunityProducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opportunity Products') ?></h4>
        <?php if (!empty($product->opportunity_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->opportunity_products as $opportunityProducts): ?>
            <tr>
                <td><?= h($opportunityProducts->opportunity_id) ?></td>
                <td><?= h($opportunityProducts->product_id) ?></td>
                <td><?= h($opportunityProducts->created) ?></td>
                <td><?= h($opportunityProducts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OpportunityProducts', 'action' => 'view', $opportunityProducts->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OpportunityProducts', 'action' => 'edit', $opportunityProducts->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpportunityProducts', 'action' => 'delete', $opportunityProducts->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityProducts->opportunity_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
