<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Town $town
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wilayas'), ['controller' => 'Wilayas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wilaya'), ['controller' => 'Wilayas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="towns form large-9 medium-8 columns content">
    <?= $this->Form->create($town) ?>
    <fieldset>
        <legend><?= __('Add Town') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('postal_code');
            echo $this->Form->control('wilaya_id', ['options' => $wilayas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
