<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationCategory[]|\Cake\Collection\CollectionInterface $organizationCategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Organization Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizationCategories index large-9 medium-8 columns content">
    <h3><?= __('Organization Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organizationCategories as $organizationCategory): ?>
            <tr>
                <td><?= $this->Number->format($organizationCategory->id) ?></td>
                <td><?= h($organizationCategory->name) ?></td>
                <td><?= h($organizationCategory->created) ?></td>
                <td><?= h($organizationCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $organizationCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organizationCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organizationCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationCategory->id)]) ?>
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
