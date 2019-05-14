<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationLocalisation[]|\Cake\Collection\CollectionInterface $organizationLocalisations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Organization Localisation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['controller' => 'Towns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Town'), ['controller' => 'Towns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizationLocalisations index large-9 medium-8 columns content">
    <h3><?= __('Organization Localisations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Organization_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Town_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organizationLocalisations as $organizationLocalisation): ?>
            <tr>
                <td><?= $organizationLocalisation->has('organization') ? $this->Html->link($organizationLocalisation->organization->name, ['controller' => 'Organizations', 'action' => 'view', $organizationLocalisation->organization->id]) : '' ?></td>
                <td><?= $organizationLocalisation->has('town') ? $this->Html->link($organizationLocalisation->town->name, ['controller' => 'Towns', 'action' => 'view', $organizationLocalisation->town->id]) : '' ?></td>
                <td><?= h($organizationLocalisation->created) ?></td>
                <td><?= h($organizationLocalisation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $organizationLocalisation->Organization_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organizationLocalisation->Organization_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organizationLocalisation->Organization_id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationLocalisation->Organization_id)]) ?>
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
