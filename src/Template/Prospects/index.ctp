<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect[]|\Cake\Collection\CollectionInterface $prospects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses'), ['controller' => 'ProspectStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Status'), ['controller' => 'ProspectStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['controller' => 'ProspectStatusesReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['controller' => 'ProspectStatusesReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospects index large-9 medium-8 columns content">
    <h3><?= __('Prospects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prospect_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prospects as $prospect): ?>
            <tr>
                <td><?= $this->Number->format($prospect->id) ?></td>
                <td><?= h($prospect->name) ?></td>
                <td><?= h($prospect->first_name) ?></td>
                <td><?= h($prospect->email) ?></td>
                <td><?= h($prospect->telephone_number) ?></td>
                <td><?= $prospect->has('user') ? $this->Html->link($prospect->user->name, ['controller' => 'Users', 'action' => 'view', $prospect->user->id]) : '' ?></td>
                <td><?= $prospect->has('source') ? $this->Html->link($prospect->source->name, ['controller' => 'Sources', 'action' => 'view', $prospect->source->id]) : '' ?></td>
                <td><?= $prospect->has('prospect_status') ? $this->Html->link($prospect->prospect_status->name, ['controller' => 'ProspectStatuses', 'action' => 'view', $prospect->prospect_status->id]) : '' ?></td>
                <td><?= h($prospect->created) ?></td>
                <td><?= h($prospect->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prospect->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prospect->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prospect->id], ['confirm' => __('Are you sure you want to delete {0}?', $prospect->name)]) ?>
                    <?= $this->Form->postLink(__('Transform'), ['action' => 'transform', $prospect->id], ['confirm' => __('Are you sure you want to transform {0} into a contact? This prospect will be deleted.', $prospect->name)]) ?>
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

<script>

</script>
