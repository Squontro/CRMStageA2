<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Daira $daira
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $daira->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $daira->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dairas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wilayas'), ['controller' => 'Wilayas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wilaya'), ['controller' => 'Wilayas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dairas form large-9 medium-8 columns content">
    <?= $this->Form->create($daira) ?>
    <fieldset>
        <legend><?= __('Edit Daira') ?></legend>
        <?php
            echo $this->Form->control('wilaya_id', ['options' => $wilayas]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
