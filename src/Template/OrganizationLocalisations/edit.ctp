<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationLocalisation $organizationLocalisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organizationLocalisation->Organization_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organizationLocalisation->Organization_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Organization Localisations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizationLocalisations form large-9 medium-8 columns content">
    <?= $this->Form->create($organizationLocalisation) ?>
    <fieldset>
        <legend><?= __('Edit Organization Localisation') ?></legend>
        <?php
        echo $this->Form->control('organization_id', ['options' => $organizations]);
        echo $this->Form->control('town_id', ['options' => $towns]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
