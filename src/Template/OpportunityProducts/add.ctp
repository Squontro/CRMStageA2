<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityProduct $opportunityProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunityProduct) ?>
    <fieldset>
        <legend><?= __('Add Opportunity Product') ?></legend>
        <?php
        echo $this->Form->control('Opportunity_id', ['options' => $opportunities]);
        echo $this->Form->control('Product_id', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
