<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactCategory $contactCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contact Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contactCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($contactCategory) ?>
    <fieldset>
        <legend><?= __('Add Contact Category') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
