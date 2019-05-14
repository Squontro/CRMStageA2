<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProspectReason $prospectReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospectReason->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospectReason->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prospect Reasons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prospectReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($prospectReason) ?>
    <fieldset>
        <legend><?= __('Edit Prospect Reason') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
