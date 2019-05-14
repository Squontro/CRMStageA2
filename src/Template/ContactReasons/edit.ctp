<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactReason $contactReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactReason->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactReason->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contact Reasons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contactReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($contactReason) ?>
    <fieldset>
        <legend><?= __('Edit Contact Reason') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
