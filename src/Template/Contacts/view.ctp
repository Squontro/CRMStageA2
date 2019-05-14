<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Categories'), ['controller' => 'ContactCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Category'), ['controller' => 'ContactCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Statuses'), ['controller' => 'ContactStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Status'), ['controller' => 'ContactStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['controller' => 'ContactOpportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['controller' => 'ContactOpportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Status Reasons'), ['controller' => 'ContactStatusReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Status Reason'), ['controller' => 'ContactStatusReasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($contact->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone Number') ?></th>
            <td><?= h($contact->telephone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($contact->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Category') ?></th>
            <td><?= $contact->has('contact_category') ? $this->Html->link($contact->contact_category->name, ['controller' => 'ContactCategories', 'action' => 'view', $contact->contact_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $contact->has('source') ? $this->Html->link($contact->source->name, ['controller' => 'Sources', 'action' => 'view', $contact->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Town') ?></th>
            <td><?= $contact->has('town') ? $this->Html->link($contact->town->name, ['controller' => 'Towns', 'action' => 'view', $contact->town->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $contact->has('user') ? $this->Html->link($contact->user->name, ['controller' => 'Users', 'action' => 'view', $contact->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization') ?></th>
            <td><?= $contact->has('organization') ? $this->Html->link($contact->organization->name, ['controller' => 'Organizations', 'action' => 'view', $contact->organization->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Status') ?></th>
            <td><?= $contact->has('contact_status') ? $this->Html->link($contact->contact_status->name, ['controller' => 'ContactStatuses', 'action' => 'view', $contact->contact_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacted First On') ?></th>
            <td><?= h($contact->contacted_first_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contact Opportunities') ?></h4>
        <?php if (!empty($contact->contact_opportunities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contact->contact_opportunities as $contactOpportunities): ?>
            <tr>
                <td><?= h($contactOpportunities->opportunity_id) ?></td>
                <td><?= h($contactOpportunities->contact_id) ?></td>
                <td><?= h($contactOpportunities->date) ?></td>
                <td><?= h($contactOpportunities->created) ?></td>
                <td><?= h($contactOpportunities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContactOpportunities', 'action' => 'view', $contactOpportunities->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContactOpportunities', 'action' => 'edit', $contactOpportunities->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContactOpportunities', 'action' => 'delete', $contactOpportunities->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactOpportunities->opportunity_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contact Status Reasons') ?></h4>
        <?php if (!empty($contact->contact_status_reasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Contact Reasons Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contact->contact_status_reasons as $contactStatusReasons): ?>
            <tr>
                <td><?= h($contactStatusReasons->contact_reasons_id) ?></td>
                <td><?= h($contactStatusReasons->contact_id) ?></td>
                <td><?= h($contactStatusReasons->created) ?></td>
                <td><?= h($contactStatusReasons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContactStatusReasons', 'action' => 'view', $contactStatusReasons->contact_reasons_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContactStatusReasons', 'action' => 'edit', $contactStatusReasons->contact_reasons_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContactStatusReasons', 'action' => 'delete', $contactStatusReasons->contact_reasons_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatusReasons->contact_reasons_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
