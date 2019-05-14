<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opportunity $opportunity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity'), ['action' => 'edit', $opportunity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity'), ['action' => 'delete', $opportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Statuses'), ['controller' => 'OpportunityStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Status'), ['controller' => 'OpportunityStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Types'), ['controller' => 'OpportunityTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Type'), ['controller' => 'OpportunityTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Opportunities'), ['controller' => 'ContactOpportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Opportunity'), ['controller' => 'ContactOpportunities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Products'), ['controller' => 'OpportunityProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Product'), ['controller' => 'OpportunityProducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Statuses Reasons'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Statuses Reason'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Raises'), ['controller' => 'Raises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raise'), ['controller' => 'Raises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunities view large-9 medium-8 columns content">
    <h3><?= h($opportunity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($opportunity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opportunity Status') ?></th>
            <td><?= $opportunity->has('opportunity_status') ? $this->Html->link($opportunity->opportunity_status->name, ['controller' => 'OpportunityStatuses', 'action' => 'view', $opportunity->opportunity_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opportunity Type') ?></th>
            <td><?= $opportunity->has('opportunity_type') ? $this->Html->link($opportunity->opportunity_type->name, ['controller' => 'OpportunityTypes', 'action' => 'view', $opportunity->opportunity_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $opportunity->has('user') ? $this->Html->link($opportunity->user->name, ['controller' => 'Users', 'action' => 'view', $opportunity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opportunity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Budget') ?></th>
            <td><?= $this->Number->format($opportunity->budget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimate Submitted') ?></th>
            <td><?= $this->Number->format($opportunity->estimate_submitted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Begin') ?></th>
            <td><?= h($opportunity->date_begin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date End Estimated') ?></th>
            <td><?= h($opportunity->date_end_estimated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunity->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contact Opportunities') ?></h4>
        <?php if (!empty($opportunity->contact_opportunities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opportunity->contact_opportunities as $contactOpportunities): ?>
            <tr>
                <td><?= h($contactOpportunities->opportunity_id) ?></td>
                <td><?= h($contactOpportunities->contact_id) ?></td>
                <td><?= h($contactOpportunities->date) ?></td>
                <td><?= h($contactOpportunities->created) ?></td>
                <td><?= h($contactOpportunities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContactOpportunities', 'action' => 'view', $contactOpportunities->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContactOpportunities', 'action' => 'edit', $contactOpportunities->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContactOpportunities', 'action' => 'delete', $contactOpportunities->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactOpportunities->opportunity_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Opportunity Products') ?></h4>
        <?php if (!empty($opportunity->opportunity_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opportunity->opportunity_products as $opportunityProducts): ?>
            <tr>
                <td><?= h($opportunityProducts->opportunity_id) ?></td>
                <td><?= h($opportunityProducts->product_id) ?></td>
                <td><?= h($opportunityProducts->created) ?></td>
                <td><?= h($opportunityProducts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OpportunityProducts', 'action' => 'view', $opportunityProducts->opportunity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OpportunityProducts', 'action' => 'edit', $opportunityProducts->opportunity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpportunityProducts', 'action' => 'delete', $opportunityProducts->opportunity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityProducts->opportunity_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Opportunity Statuses Reasons') ?></h4>
        <?php if (!empty($opportunity->opportunity_statuses_reasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Opportunity Reasons Id') ?></th>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opportunity->opportunity_statuses_reasons as $opportunityStatusesReasons): ?>
            <tr>
                <td><?= h($opportunityStatusesReasons->opportunity_reasons_id) ?></td>
                <td><?= h($opportunityStatusesReasons->opportunity_id) ?></td>
                <td><?= h($opportunityStatusesReasons->created) ?></td>
                <td><?= h($opportunityStatusesReasons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'view', $opportunityStatusesReasons->opportunity_status_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'edit', $opportunityStatusesReasons->opportunity_status_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpportunityStatusesReasons', 'action' => 'delete', $opportunityStatusesReasons->opportunity_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityStatusesReasons->opportunity_status_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Raises') ?></h4>
        <?php if (!empty($opportunity->raises)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Date Begin') ?></th>
                <th scope="col"><?= __('Date End') ?></th>
                <th scope="col"><?= __('Raise Type Id') ?></th>
                <th scope="col"><?= __('Raise Status Id') ?></th>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opportunity->raises as $raises): ?>
            <tr>
                <td><?= h($raises->id) ?></td>
                <td><?= h($raises->name) ?></td>
                <td><?= h($raises->date_begin) ?></td>
                <td><?= h($raises->date_end) ?></td>
                <td><?= h($raises->raise_type_id) ?></td>
                <td><?= h($raises->raise_status_id) ?></td>
                <td><?= h($raises->opportunity_id) ?></td>
                <td><?= h($raises->created) ?></td>
                <td><?= h($raises->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Raises', 'action' => 'view', $raises->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Raises', 'action' => 'edit', $raises->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Raises', 'action' => 'delete', $raises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raises->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
