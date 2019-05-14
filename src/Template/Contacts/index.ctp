<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Categories'), ['controller' => 'ContactCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Category'), ['controller' => 'ContactCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Statuses'), ['controller' => 'ContactStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Status'), ['controller' => 'ContactStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['controller' => 'ContactOpportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['controller' => 'ContactOpportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Status Reasons'), ['controller' => 'ContactStatusReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Status Reason'), ['controller' => 'ContactStatusReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index large-9 medium-8 columns content">
    <h3><?= __('Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('town_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacted_first_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->name) ?></td>
                <td><?= h($contact->first_name) ?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->telephone_number) ?></td>
                <td><?= h($contact->website) ?></td>
                <td><?= $contact->has('contact_category') ? $this->Html->link($contact->contact_category->name, ['controller' => 'ContactCategories', 'action' => 'view', $contact->contact_category->id]) : '' ?></td>
                <td><?= $contact->has('source') ? $this->Html->link($contact->source->name, ['controller' => 'Sources', 'action' => 'view', $contact->source->id]) : '' ?></td>
                <td><?= $contact->has('town') ? $this->Html->link($contact->town->name, ['controller' => 'Towns', 'action' => 'view', $contact->town->id]) : '' ?></td>
                <td><?= $contact->has('user') ? $this->Html->link($contact->user->name, ['controller' => 'Users', 'action' => 'view', $contact->user->id]) : '' ?></td>
                <td><?= $contact->has('organization') ? $this->Html->link($contact->organization->name, ['controller' => 'Organizations', 'action' => 'view', $contact->organization->id]) : '' ?></td>
                <td><?= $contact->has('contact_status') ? $this->Html->link($contact->contact_status->name, ['controller' => 'ContactStatuses', 'action' => 'view', $contact->contact_status->id]) : '' ?></td>
                <td><?= h($contact->contacted_first_on) ?></td>
                <td><?= h($contact->created) ?></td>
                <td><?= h($contact->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
