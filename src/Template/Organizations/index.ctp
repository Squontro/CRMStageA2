<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization[]|\Cake\Collection\CollectionInterface $organizations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organization Types'), ['controller' => 'OrganizationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization Type'), ['controller' => 'OrganizationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organization Categories'), ['controller' => 'OrganizationCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization Category'), ['controller' => 'OrganizationCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizations index large-9 medium-8 columns content">
    <h3><?= __('Organizations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postal_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nis_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nif_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trade_registery_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imposition_article') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organizations as $organization): ?>
            <tr>
                <td><?= $this->Number->format($organization->id) ?></td>
                <td><?= h($organization->name) ?></td>
                <td><?= h($organization->telephone_number) ?></td>
                <td><?= h($organization->postal_address) ?></td>
                <td><?= $organization->has('organization_type') ? $this->Html->link($organization->organization_type->name, ['controller' => 'OrganizationTypes', 'action' => 'view', $organization->organization_type->id]) : '' ?></td>
                <td><?= $organization->has('organization_category') ? $this->Html->link($organization->organization_category->name, ['controller' => 'OrganizationCategories', 'action' => 'view', $organization->organization_category->id]) : '' ?></td>
                <td><?= h($organization->nis_number) ?></td>
                <td><?= h($organization->nif_number) ?></td>
                <td><?= h($organization->trade_registery_number) ?></td>
                <td><?= h($organization->imposition_article) ?></td>
                <td><?= h($organization->created) ?></td>
                <td><?= h($organization->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $organization->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organization->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id)]) ?>
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
