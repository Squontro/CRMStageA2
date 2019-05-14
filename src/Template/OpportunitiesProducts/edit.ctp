<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunitiesProduct $opportunitiesProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opportunitiesProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opportunitiesProduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opportunities Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunitiesProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunitiesProduct) ?>
    <fieldset>
        <legend><?= __('Edit Opportunities Product') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
