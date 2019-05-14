<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsOpportunity $contactsOpportunity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacts Opportunity'), ['action' => 'edit', $contactsOpportunity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacts Opportunity'), ['action' => 'delete', $contactsOpportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsOpportunity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts Opportunities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacts Opportunity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactsOpportunities view large-9 medium-8 columns content">
    <h3><?= h($contactsOpportunity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $contactsOpportunity->has('opportunity') ? $this->Html->link($contactsOpportunity->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $contactsOpportunity->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactsOpportunity->has('contact') ? $this->Html->link($contactsOpportunity->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactsOpportunity->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactsOpportunity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($contactsOpportunity->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactsOpportunity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactsOpportunity->modified) ?></td>
        </tr>
    </table>
</div>
