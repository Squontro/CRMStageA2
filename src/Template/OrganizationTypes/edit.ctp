<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationType $organizationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organizationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organizationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Organization Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($organizationType) ?>
    <fieldset>
        <legend><?= __('Edit Organization Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
