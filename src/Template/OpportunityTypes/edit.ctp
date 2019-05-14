<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityType $opportunityType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opportunityType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opportunity Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunityTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunityType) ?>
    <fieldset>
        <legend><?= __('Edit Opportunity Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
