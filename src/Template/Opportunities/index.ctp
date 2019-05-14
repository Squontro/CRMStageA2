<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opportunity[]|\Cake\Collection\CollectionInterface $opportunities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses'), ['controller' => 'OpportunityStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Status'), ['controller' => 'OpportunityStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Types'), ['controller' => 'OpportunityTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Type'), ['controller' => 'OpportunityTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['controller' => 'ContactOpportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['controller' => 'ContactOpportunities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['controller' => 'OpportunityProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['controller' => 'OpportunityProducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Statuses Reasons'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Statuses Reason'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opportunities index large-9 medium-9 columns content">
    <h3><?= __('Opportunities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_begin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_end_estimated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('budget') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estimate_submitted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunities as $opportunity): ?>
            <tr>
                <td><?= $this->Number->format($opportunity->id) ?></td>
                <td><?= h($opportunity->name) ?></td>
                <td><?= h($opportunity->date_begin) ?></td>
                <td><?= h($opportunity->date_end_estimated) ?></td>
                <td><?= $this->Number->format($opportunity->budget) ?></td>
                <td><?= $opportunity->has('opportunity_status') ? $this->Html->link($opportunity->opportunity_status->name, ['controller' => 'OpportunityStatuses', 'action' => 'view', $opportunity->opportunity_status->id]) : '' ?></td>
                <td><?= $opportunity->has('opportunity_type') ? $this->Html->link($opportunity->opportunity_type->name, ['controller' => 'OpportunityTypes', 'action' => 'view', $opportunity->opportunity_type->id]) : '' ?></td>
                <td><?= $opportunity->has('user') ? $this->Html->link($opportunity->user->name, ['controller' => 'Users', 'action' => 'view', $opportunity->user->id]) : '' ?></td>
                <td><?= $this->Number->format($opportunity->estimate_submitted) ?></td>
                <td><?= h($opportunity->created) ?></td>
                <td><?= h($opportunity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opportunity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunity->id)]) ?>
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
