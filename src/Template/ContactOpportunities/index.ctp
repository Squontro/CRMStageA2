<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactOpportunity[]|\Cake\Collection\CollectionInterface $contactOpportunities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactOpportunities index large-9 medium-8 columns content">
    <h3><?= __('Contact Opportunities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('opportunity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactOpportunities as $contactOpportunity): ?>
            <tr>
                <td><?= $contactOpportunity->has('opportunity') ? $this->Html->link($contactOpportunity->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $contactOpportunity->opportunity->id]) : '' ?></td>
                <td><?= $contactOpportunity->has('contact') ? $this->Html->link($contactOpportunity->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contactOpportunity->contact->id]) : '' ?></td>
                <td><?= h($contactOpportunity->date) ?></td>
                <td><?= h($contactOpportunity->created) ?></td>
                <td><?= h($contactOpportunity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactOpportunity->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactOpportunity->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactOpportunity->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactOpportunity->opportunity_id)]) ?>
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
