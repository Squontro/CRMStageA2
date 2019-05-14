<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsOpportunity[]|\Cake\Collection\CollectionInterface $contactsOpportunities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contacts Opportunity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactsOpportunities index large-9 medium-8 columns content">
    <h3><?= __('Contacts Opportunities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactsOpportunities as $contactsOpportunity): ?>
            <tr>
                <td><?= $this->Number->format($contactsOpportunity->id) ?></td>
                <td><?= $contactsOpportunity->has('opportunity') ? $this->Html->link($contactsOpportunity->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $contactsOpportunity->opportunity->id]) : '' ?></td>
                <td><?= $contactsOpportunity->has('contact') ? $this->Html->link($contactsOpportunity->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactsOpportunity->contact->id]) : '' ?></td>
                <td><?= h($contactsOpportunity->date) ?></td>
                <td><?= h($contactsOpportunity->created) ?></td>
                <td><?= h($contactsOpportunity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsOpportunity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsOpportunity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsOpportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsOpportunity->id)]) ?>
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
