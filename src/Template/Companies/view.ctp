<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company Categories'), ['controller' => 'CompanyCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Category'), ['controller' => 'CompanyCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nis Number') ?></th>
            <td><?= h($company->nis_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nif Number') ?></th>
            <td><?= h($company->nif_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siret Number') ?></th>
            <td><?= h($company->siret_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siren Number') ?></th>
            <td><?= h($company->siren_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trade Registery Number') ?></th>
            <td><?= h($company->trade_registery_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ape Code') ?></th>
            <td><?= h($company->ape_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization') ?></th>
            <td><?= $company->has('organization') ? $this->Html->link($company->organization->name, ['controller' => 'Organizations', 'action' => 'view', $company->organization->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Type') ?></th>
            <td><?= $company->has('company_type') ? $this->Html->link($company->company_type->name, ['controller' => 'CompanyTypes', 'action' => 'view', $company->company_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Category') ?></th>
            <td><?= $company->has('company_category') ? $this->Html->link($company->company_category->name, ['controller' => 'CompanyCategories', 'action' => 'view', $company->company_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($company->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($company->modification_date) ?></td>
        </tr>
    </table>
</div>
