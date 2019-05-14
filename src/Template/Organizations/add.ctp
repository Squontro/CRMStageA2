<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organization Types'), ['controller' => 'OrganizationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization Type'), ['controller' => 'OrganizationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organization Categories'), ['controller' => 'OrganizationCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization Category'), ['controller' => 'OrganizationCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizations form large-9 medium-8 columns content">
    <?= $this->Form->create($organization) ?>
    <fieldset>
        <legend><?= __('Add Organization') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('telephone_number');
            echo $this->Form->control('postal_address');
            echo $this->Form->control('organization_type_id', ['options' => $organizationTypes]);
            echo $this->Form->control('organization_category_id', ['options' => $organizationCategories]);
            echo $this->Form->control('nis_number');
            echo $this->Form->control('nif_number');
            echo $this->Form->control('trade_registery_number');
            echo $this->Form->control('imposition_article');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
