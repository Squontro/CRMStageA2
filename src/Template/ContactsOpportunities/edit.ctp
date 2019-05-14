<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsOpportunity $contactsOpportunity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactsOpportunity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactsOpportunity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts Opportunities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactsOpportunities form large-9 medium-8 columns content">
    <?= $this->Form->create($contactsOpportunity) ?>
    <fieldset>
        <legend><?= __('Edit Contacts Opportunity') ?></legend>
        <?php
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
