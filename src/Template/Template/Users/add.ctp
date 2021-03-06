<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Parameters'), ['controller' => 'UserParameters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Parameter'), ['controller' => 'UserParameters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name', ['value' => $employee_to_array['name']]);
            echo $this->Form->control('first_name' , ['value' => $employee_to_array['first_name']]);
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email', ['value' => $employee_to_array['email']]);
            echo $this->Form->control('profile_id', ['options' => $profiles]);
            echo $this->Form->control('employee_id', ['options' => $employees, 'val' => $employee_to_array['id']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
