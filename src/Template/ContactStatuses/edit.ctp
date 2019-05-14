<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatus $contactStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contact Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($contactStatus) ?>
    <fieldset>
        <legend><?= __('Edit Contact Status') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
