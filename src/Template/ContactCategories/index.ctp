<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactCategory[]|\Cake\Collection\CollectionInterface $contactCategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactCategories index large-9 medium-8 columns content">
    <h3><?= __('Contact Categories') ?></h3>
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
            <?php foreach ($contactCategories as $contactCategory): ?>
            <tr>
                <td><?= $this->Number->format($contactCategory->id) ?></td>
                <td><?= h($contactCategory->name) ?></td>
                <td><?= h($contactCategory->created) ?></td>
                <td><?= h($contactCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactCategory->id)]) ?>
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
