<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joint $joint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Joints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Childs'), ['controller' => 'Childs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Childs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joints form large-9 medium-8 columns content">
    <?= $this->Form->create($joint) ?>
    <fieldset>
        <legend><?= __('Add Joint') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('civility_join');
            echo $this->Form->control('first_name_join');
            echo $this->Form->control('laste_name_join');
            echo $this->Form->control('date_birth_join', ['empty' => true]);
            echo $this->Form->control('place_birth_join');
            echo $this->Form->control('sex_join');
            echo $this->Form->control('phone_number_join');
            echo $this->Form->control('emial_join');
            echo $this->Form->control('nationality_join');
            echo $this->Form->control('ccp_number_join');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
