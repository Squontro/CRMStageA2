<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsultationType $consultationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consultationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consultation Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($consultationType) ?>
    <fieldset>
        <legend><?= __('Edit Consultation Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
