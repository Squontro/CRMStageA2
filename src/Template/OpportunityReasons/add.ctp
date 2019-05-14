<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityReason $opportunityReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="opportunityReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($opportunityReason) ?>
    <fieldset>
        <legend><?= __('Add Opportunity Reason') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
