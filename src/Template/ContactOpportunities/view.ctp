<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactOpportunity $contactOpportunity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Opportunity'), ['action' => 'edit', $contactOpportunity->opportunity_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Opportunity'), ['action' => 'delete', $contactOpportunity->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactOpportunity->opportunity_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactOpportunities view large-9 medium-8 columns content">
    <h3><?= h($contactOpportunity->opportunity_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Opportunity') ?></th>
            <td><?= $contactOpportunity->has('opportunity') ? $this->Html->link($contactOpportunity->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $contactOpportunity->opportunity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactOpportunity->has('contact') ? $this->Html->link($contactOpportunity->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactOpportunity->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($contactOpportunity->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactOpportunity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactOpportunity->modified) ?></td>
        </tr>
    </table>
</div>
