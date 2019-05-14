<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatusReason $contactStatusReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
        <legend><?= __('Add Contact Status Reason') ?></legend>
        <?php
            echo $this->Form->control('contact_id', ['options' => $contacts]);
            echo $this->Form->control('contact_reasons_id', ['options' => $contactReasons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
