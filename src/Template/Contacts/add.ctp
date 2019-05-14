<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
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
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->control('name', ['value' => $prospect_to_array['name']]);
            echo $this->Form->control('first_name', ['value' => $prospect_to_array['first_name']]);
            echo $this->Form->control('email', ['value' => $prospect_to_array['email']]);
            echo $this->Form->control('telephone_number', ['value' => $prospect_to_array['telephone_number']]);
            echo $this->Form->control('website');
            echo $this->Form->control('category_id', ['options' => $contactCategories]);
            echo $this->Form->control('source_id', ['options' => $sources]);
            echo $this->Form->control('town_id', ['options' => $towns]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('organization_id', ['options' => $organizations]);
            echo $this->Form->control('contact_status_id', ['options' => $contactStatuses]);
            echo $this->Form->control('contacted_first_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
