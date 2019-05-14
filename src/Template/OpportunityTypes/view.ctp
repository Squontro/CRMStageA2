<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OpportunityType $opportunityType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opportunity Type'), ['action' => 'edit', $opportunityType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Type'), ['action' => 'delete', $opportunityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opportunityTypes view large-9 medium-8 columns content">
    <h3><?= h($opportunityType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($opportunityType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opportunityType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($opportunityType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($opportunityType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opportunities') ?></h4>
        <?php if (!empty($opportunityType->opportunities)): ?>
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
            <?php foreach ($opportunityType->opportunities as $opportunities): ?>
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
