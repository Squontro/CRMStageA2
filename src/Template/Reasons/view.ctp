<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reason $reason
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reason'), ['action' => 'edit', $reason->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reason'), ['action' => 'delete', $reason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reason->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reason'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Reasons'), ['controller' => 'OpportunityReasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Reason'), ['controller' => 'OpportunityReasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reasons view large-9 medium-8 columns content">
    <h3><?= h($reason->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($reason->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reason->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($reason->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($reason->modification_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opportunity Reasons') ?></h4>
        <?php if (!empty($reason->opportunity_reasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Reason Id') ?></th>
                <th scope="col"><?= __('Opportunity Id') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Modification Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($reason->opportunity_reasons as $opportunityReasons): ?>
            <tr>
                <td><?= h($opportunityReasons->reason_id) ?></td>
                <td><?= h($opportunityReasons->opportunity_id) ?></td>
                <td><?= h($opportunityReasons->creation_date) ?></td>
                <td><?= h($opportunityReasons->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OpportunityReasons', 'action' => 'view', $opportunityReasons->reason_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OpportunityReasons', 'action' => 'edit', $opportunityReasons->reason_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpportunityReasons', 'action' => 'delete', $opportunityReasons->reason_id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityReasons->reason_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
