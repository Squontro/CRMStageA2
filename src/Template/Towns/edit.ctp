<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Town $town
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $town->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $town->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dairas'), ['controller' => 'Dairas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daira'), ['controller' => 'Dairas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="towns form large-9 medium-8 columns content">
    <?= $this->Form->create($town) ?>
    <fieldset>
        <legend><?= __('Edit Town') ?></legend>
        <?php
            echo $this->Form->control('daira_id', ['options' => $dairas]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
