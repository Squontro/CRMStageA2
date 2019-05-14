<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyCategory $companyCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $companyCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $companyCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Company Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companyCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($companyCategory) ?>
    <fieldset>
        <legend><?= __('Edit Company Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
