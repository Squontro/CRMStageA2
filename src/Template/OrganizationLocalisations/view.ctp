<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationLocalisation $organizationLocalisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Localisation'), ['action' => 'edit', $organizationLocalisation->Organization_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Localisation'), ['action' => 'delete', $organizationLocalisation->Organization_id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationLocalisation->Organization_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Localisations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Localisation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationLocalisations view large-9 medium-8 columns content">
    <h3><?= h($organizationLocalisation->Organization_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Organization') ?></th>
            <td><?= $organizationLocalisation->has('organization') ? $this->Html->link($organizationLocalisation->organization->name, ['controller' => 'Organizations', 'action' => 'view', $organizationLocalisation->organization->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Town') ?></th>
            <td><?= $organizationLocalisation->has('town') ? $this->Html->link($organizationLocalisation->town->name, ['controller' => 'Towns', 'action' => 'view', $organizationLocalisation->town->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationLocalisation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organizationLocalisation->modified) ?></td>
        </tr>
    </table>
</div>
