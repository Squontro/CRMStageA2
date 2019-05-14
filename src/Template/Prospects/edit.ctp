<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospect->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses'), ['controller' => 'ProspectStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Status'), ['controller' => 'ProspectStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['controller' => 'ProspectStatusesReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['controller' => 'ProspectStatusesReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospects form large-9 medium-8 columns content">
    <?= $this->Form->create($prospect) ?>
    <fieldset>
        <legend><?= __('Edit Prospect') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone_number');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('source_id', ['options' => $sources]);
            echo $this->Form->control('prospect_status_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
