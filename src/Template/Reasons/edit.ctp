<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reason $reason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reason->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reason->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reasons form large-9 medium-8 columns content">
    <?= $this->Form->create($reason) ?>
    <fieldset>
        <legend><?= __('Edit Reason') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
