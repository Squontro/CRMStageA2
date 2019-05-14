<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatusReason $contactStatusReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactStatusReason->contact_reasons_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatusReason->contact_reasons_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contact Status Reasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contact Reasons'), ['controller' => 'ContactReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Reason'), ['controller' => 'ContactReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactStatusReasons form large-9 medium-8 columns content">
    <?= $this->Form->create($contactStatusReason) ?>
    <fieldset>
        <legend><?= __('Edit Contact Status Reason') ?></legend>
        <?php
            echo $this->Form->control('contact_id', ['options' => $contacts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
