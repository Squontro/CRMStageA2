<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AbsenceType $absenceType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $absenceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $absenceType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Absence Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Abs Employees'), ['controller' => 'AbsEmployees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Abs Employee'), ['controller' => 'AbsEmployees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="absenceTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($absenceType) ?>
    <fieldset>
        <legend><?= __('Edit Absence Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



