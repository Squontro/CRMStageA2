<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatusReason $contactStatusReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Status Reason'), ['action' => 'edit', $contactStatusReason->contact_reasons_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Status Reason'), ['action' => 'delete', $contactStatusReason->contact_reasons_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatusReason->contact_reasons_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Status Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Status Reason'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Reasons'), ['controller' => 'ContactReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Reason'), ['controller' => 'ContactReasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactStatusReasons view large-9 medium-8 columns content">
    <h3><?= h($contactStatusReason->contact_reasons_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contact Reason') ?></th>
            <td><?= $contactStatusReason->has('contact_reason') ? $this->Html->link($contactStatusReason->contact_reason->name, ['controller' => 'ContactReasons', 'action' => 'view', $contactStatusReason->contact_reason->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactStatusReason->has('contact') ? $this->Html->link($contactStatusReason->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactStatusReason->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactStatusReason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactStatusReason->modified) ?></td>
        </tr>
    </table>
</div>
