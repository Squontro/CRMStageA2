<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityStatus $opportunityStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity Status'), ['action' => 'edit', $opportunityStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Status'), ['action' => 'delete', $opportunityStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunityStatuses view large-9 medium-8 columns content">
    <h3><?= h($opportunityStatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($opportunityStatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opportunityStatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunityStatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunityStatus->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opportunities') ?></h4>
        <?php if (!empty($opportunityStatus->opportunities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Date Begin') ?></th>
                <th scope="col"><?= __('Date End Estimated') ?></th>
                <th scope="col"><?= __('Budget') ?></th>
                <th scope="col"><?= __('Opportunity Status Id') ?></th>
                <th scope="col"><?= __('Opportunity Type Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Estimate Submitted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opportunityStatus->opportunities as $opportunities): ?>
            <tr>
                <td><?= h($opportunities->id) ?></td>
                <td><?= h($opportunities->name) ?></td>
                <td><?= h($opportunities->date_begin) ?></td>
                <td><?= h($opportunities->date_end_estimated) ?></td>
                <td><?= h($opportunities->budget) ?></td>
                <td><?= h($opportunities->opportunity_status_id) ?></td>
                <td><?= h($opportunities->opportunity_type_id) ?></td>
                <td><?= h($opportunities->user_id) ?></td>
                <td><?= h($opportunities->estimate_submitted) ?></td>
                <td><?= h($opportunities->created) ?></td>
                <td><?= h($opportunities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Opportunities', 'action' => 'view', $opportunities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Opportunities', 'action' => 'edit', $opportunities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opportunities', 'action' => 'delete', $opportunities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
