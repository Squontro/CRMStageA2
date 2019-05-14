<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Parameters'), ['controller' => 'UserParameters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Parameter'), ['controller' => 'UserParameters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $user->has('profile') ? $this->Html->link($user->profile->name, ['controller' => 'Profiles', 'action' => 'view', $user->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $user->has('employee') ? $this->Html->link($user->employee->name, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($user->contacts)): ?>
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
            <?php foreach ($user->contacts as $contacts): ?>
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
    <div class="related">
        <h4><?= __('Related Opportunities') ?></h4>
        <?php if (!empty($user->opportunities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Date Begin') ?></th>
                <th scope="col"><?= __('Date End Estimated') ?></th>
                <th scope="col"><?= __('Budget') ?></th>
                <th scope="col"><?= __('Opportunity Status Id') ?></th>
                <th scope="col"><?= __('Opportunity Type Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Estimate Submitted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->opportunities as $opportunities): ?>
            <tr>
                <td><?= h($opportunities->id) ?></td>
                <td><?= h($opportunities->name) ?></td>
                <td><?= h($opportunities->date_begin) ?></td>
                <td><?= h($opportunities->date_end_estimated) ?></td>
                <td><?= h($opportunities->budget) ?></td>
                <td><?= h($opportunities->opportunity_status_id) ?></td>
                <td><?= h($opportunities->opportunity_type_id) ?></td>
                <td><?= h($opportunities->user_id) ?></td>
                <td><?= h($opportunities->estimate_submitted) ?></td>
                <td><?= h($opportunities->created) ?></td>
                <td><?= h($opportunities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Opportunities', 'action' => 'view', $opportunities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Opportunities', 'action' => 'edit', $opportunities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opportunities', 'action' => 'delete', $opportunities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prospects') ?></h4>
        <?php if (!empty($user->prospects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telephone Number') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Propsect Status Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->prospects as $prospects): ?>
            <tr>
                <td><?= h($prospects->id) ?></td>
                <td><?= h($prospects->name) ?></td>
                <td><?= h($prospects->first_name) ?></td>
                <td><?= h($prospects->email) ?></td>
                <td><?= h($prospects->telephone_number) ?></td>
                <td><?= h($prospects->user_id) ?></td>
                <td><?= h($prospects->source_id) ?></td>
                <td><?= h($prospects->propsect_status_id) ?></td>
                <td><?= h($prospects->created) ?></td>
                <td><?= h($prospects->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prospects', 'action' => 'view', $prospects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prospects', 'action' => 'edit', $prospects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prospects', 'action' => 'delete', $prospects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Parameters') ?></h4>
        <?php if (!empty($user->user_parameters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Parameter Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_parameters as $userParameters): ?>
            <tr>
                <td><?= h($userParameters->user_id) ?></td>
                <td><?= h($userParameters->parameter_id) ?></td>
                <td><?= h($userParameters->value) ?></td>
                <td><?= h($userParameters->created) ?></td>
                <td><?= h($userParameters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserParameters', 'action' => 'view', $userParameters->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserParameters', 'action' => 'edit', $userParameters->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserParameters', 'action' => 'delete', $userParameters->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userParameters->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
