<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Categories'), ['controller' => 'CompanyCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company Category'), ['controller' => 'CompanyCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Add Company') ?></legend>
        <?php
            echo $this->Form->control('nis_number');
            echo $this->Form->control('nif_number');
            echo $this->Form->control('siret_number');
            echo $this->Form->control('siren_number');
            echo $this->Form->control('trade_registery_number');
            echo $this->Form->control('ape_code');
            echo $this->Form->control('organization_id', ['options' => $organizations, 'empty' => true]);
            echo $this->Form->control('company_type_id', ['options' => $companyTypes]);
            echo $this->Form->control('company_category_id', ['options' => $companyCategories]);
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
