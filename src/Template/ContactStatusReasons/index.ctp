<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatusReason[]|\Cake\Collection\CollectionInterface $contactStatusReasons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact Status Reason'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Reasons'), ['controller' => 'ContactReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Reason'), ['controller' => 'ContactReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactStatusReasons index large-9 medium-8 columns content">
    <h3><?= __('Contact Status Reasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('contact_reasons_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactStatusReasons as $contactStatusReason): ?>
            <tr>
                <td><?= $contactStatusReason->has('contact_reason') ? $this->Html->link($contactStatusReason->contact_reason->name, ['controller' => 'ContactReasons', 'action' => 'view', $contactStatusReason->contact_reason->id]) : '' ?></td>
                <td><?= $contactStatusReason->has('contact') ? $this->Html->link($contactStatusReason->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactStatusReason->contact->id]) : '' ?></td>
                <td><?= h($contactStatusReason->created) ?></td>
                <td><?= h($contactStatusReason->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactStatusReason->contact_reasons_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactStatusReason->contact_reasons_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactStatusReason->contact_reasons_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatusReason->contact_reasons_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
