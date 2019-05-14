<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserParameter $userParameter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userParameter->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userParameter->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Parameters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parameters'), ['controller' => 'Parameters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parameter'), ['controller' => 'Parameters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userParameters form large-9 medium-8 columns content">
    <?= $this->Form->create($userParameter) ?>
    <fieldset>
        <legend><?= __('Edit User Parameter') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
