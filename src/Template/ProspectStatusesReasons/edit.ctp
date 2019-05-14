<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProspectStatusesReason $prospectStatusesReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospectStatusesReason->propsect_reason_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospectStatusesReason->propsect_reason_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Reasons'), ['controller' => 'ProspectReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Reason'), ['controller' => 'ProspectReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospectStatusesReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($prospectStatusesReason) ?>
    <fieldset>
        <legend><?= __('Edit Prospect Statuses Reason') ?></legend>
        <?php
            echo $this->Form->control('Prospect_reason_id', ['options' => $prospectReasons]);
            echo $this->Form->control('Prospect_id', ['options' => $prospects]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
