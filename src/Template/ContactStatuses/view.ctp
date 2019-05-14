<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactStatus $contactStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact Status'), ['action' => 'edit', $contactStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Status'), ['action' => 'delete', $contactStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactStatuses view large-9 medium-8 columns content">
    <h3><?= h($contactStatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contactStatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactStatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contactStatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contactStatus->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($contactStatus->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telephone Number') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Town Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Organization Id') ?></th>
                <th scope="col"><?= __('Contact Status Id') ?></th>
                <th scope="col"><?= __('Contacted First On') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contactStatus->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->name) ?></td>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->email) ?></td>
                <td><?= h($contacts->telephone_number) ?></td>
                <td><?= h($contacts->website) ?></td>
                <td><?= h($contacts->category_id) ?></td>
                <td><?= h($contacts->source_id) ?></td>
                <td><?= h($contacts->town_id) ?></td>
                <td><?= h($contacts->user_id) ?></td>
                <td><?= h($contacts->organization_id) ?></td>
                <td><?= h($contacts->contact_status_id) ?></td>
                <td><?= h($contacts->contacted_first_on) ?></td>
                <td><?= h($contacts->created) ?></td>
                <td><?= h($contacts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
