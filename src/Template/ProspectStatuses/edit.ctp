<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProspectStatus $prospectStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospectStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospectStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prospectStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($prospectStatus) ?>
    <fieldset>
        <legend><?= __('Edit Prospect Status') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
