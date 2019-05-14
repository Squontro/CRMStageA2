<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Categories'), ['controller' => 'CompanyCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company Category'), ['controller' => 'CompanyCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companies index large-9 medium-8 columns content">
    <h3><?= __('Companies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nis_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nif_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('siret_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('siren_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trade_registery_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ape_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td><?= $this->Number->format($company->id) ?></td>
                <td><?= h($company->nis_number) ?></td>
                <td><?= h($company->nif_number) ?></td>
                <td><?= h($company->siret_number) ?></td>
                <td><?= h($company->siren_number) ?></td>
                <td><?= h($company->trade_registery_number) ?></td>
                <td><?= h($company->ape_code) ?></td>
                <td><?= $company->has('organization') ? $this->Html->link($company->organization->name, ['controller' => 'Organizations', 'action' => 'view', $company->organization->id]) : '' ?></td>
                <td><?= $company->has('company_type') ? $this->Html->link($company->company_type->name, ['controller' => 'CompanyTypes', 'action' => 'view', $company->company_type->id]) : '' ?></td>
                <td><?= $company->has('company_category') ? $this->Html->link($company->company_category->name, ['controller' => 'CompanyCategories', 'action' => 'view', $company->company_category->id]) : '' ?></td>
                <td><?= h($company->creation_date) ?></td>
                <td><?= h($company->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
