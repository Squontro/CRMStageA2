<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyCategory $companyCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company Category'), ['action' => 'edit', $companyCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company Category'), ['action' => 'delete', $companyCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Company Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companyCategories view large-9 medium-8 columns content">
    <h3><?= h($companyCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($companyCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companyCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($companyCategory->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($companyCategory->modification_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($companyCategory->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nis Number') ?></th>
                <th scope="col"><?= __('Nif Number') ?></th>
                <th scope="col"><?= __('Siret Number') ?></th>
                <th scope="col"><?= __('Siren Number') ?></th>
                <th scope="col"><?= __('Trade Registery Number') ?></th>
                <th scope="col"><?= __('Ape Code') ?></th>
                <th scope="col"><?= __('Organization Id') ?></th>
                <th scope="col"><?= __('Company Type Id') ?></th>
                <th scope="col"><?= __('Company Category Id') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Modification Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($companyCategory->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->nis_number) ?></td>
                <td><?= h($companies->nif_number) ?></td>
                <td><?= h($companies->siret_number) ?></td>
                <td><?= h($companies->siren_number) ?></td>
                <td><?= h($companies->trade_registery_number) ?></td>
                <td><?= h($companies->ape_code) ?></td>
                <td><?= h($companies->organization_id) ?></td>
                <td><?= h($companies->company_type_id) ?></td>
                <td><?= h($companies->company_category_id) ?></td>
                <td><?= h($companies->creation_date) ?></td>
                <td><?= h($companies->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
