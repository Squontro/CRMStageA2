<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactReason $contactReason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Reason'), ['action' => 'edit', $contactReason->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Reason'), ['action' => 'delete', $contactReason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactReason->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Reason'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactReasons view large-9 medium-8 columns content">
    <h3><?= h($contactReason->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contactReason->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactReason->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactReason->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactReason->modified) ?></td>
        </tr>
    </table>
</div>
