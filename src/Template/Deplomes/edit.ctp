<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deplome $deplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deplome->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deplome->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Deplomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emp Deplomes'), ['controller' => 'EmpDeplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emp Deplome'), ['controller' => 'EmpDeplomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deplomes form large-9 medium-8 columns content">
    <?= $this->Form->create($deplome) ?>
    <fieldset>
        <legend><?= __('Edit Deplome') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
