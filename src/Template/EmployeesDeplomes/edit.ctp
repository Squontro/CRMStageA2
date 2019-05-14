<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDeplome $employeesDeplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employeesDeplome->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDeplome->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employees Deplomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deplomes'), ['controller' => 'Deplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Deplome'), ['controller' => 'Deplomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesDeplomes form large-9 medium-8 columns content">
    <?= $this->Form->create($employeesDeplome) ?>
    <fieldset>
        <legend><?= __('Edit Employees Deplome') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('deplome_id', ['options' => $deplomes]);
            echo $this->Form->control('date_deplome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
