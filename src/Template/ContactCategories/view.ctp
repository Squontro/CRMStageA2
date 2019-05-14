<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactCategory $contactCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Category'), ['action' => 'edit', $contactCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Category'), ['action' => 'delete', $contactCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactCategories view large-9 medium-8 columns content">
    <h3><?= h($contactCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contactCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactCategory->modified) ?></td>
        </tr>
    </table>
</div>
