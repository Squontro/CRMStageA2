<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AbsEmployee $absEmployee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Abs Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Absence Types'), ['controller' => 'AbsenceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Absence Type'), ['controller' => 'AbsenceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="absEmployees form large-9 medium-8 columns content">
    <?= $this->Form->create($absEmployee) ?>
    <fieldset>
        <legend><?= __('Add Abs Employee') ?></legend>
        <?php
            echo $this->Form->control('date_abs_start', ['empty' => true]);
            echo $this->Form->control('date_abs_end', ['empty' => true]);
            echo $this->Form->control('motif');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
