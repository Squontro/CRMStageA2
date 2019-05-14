<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationCategory $organizationCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Category'), ['action' => 'edit', $organizationCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Category'), ['action' => 'delete', $organizationCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationCategories view large-9 medium-8 columns content">
    <h3><?= h($organizationCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organizationCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizationCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organizationCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Organizations') ?></h4>
        <?php if (!empty($organizationCategory->organizations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Telephone Number') ?></th>
                <th scope="col"><?= __('Postal Address') ?></th>
                <th scope="col"><?= __('Organization Type Id') ?></th>
                <th scope="col"><?= __('Organization Category Id') ?></th>
                <th scope="col"><?= __('Nis Number') ?></th>
                <th scope="col"><?= __('Nif Number') ?></th>
                <th scope="col"><?= __('Trade Registery Number') ?></th>
                <th scope="col"><?= __('Imposition Article') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($organizationCategory->organizations as $organizations): ?>
            <tr>
                <td><?= h($organizations->id) ?></td>
                <td><?= h($organizations->name) ?></td>
                <td><?= h($organizations->telephone_number) ?></td>
                <td><?= h($organizations->postal_address) ?></td>
                <td><?= h($organizations->organization_type_id) ?></td>
                <td><?= h($organizations->organization_category_id) ?></td>
                <td><?= h($organizations->nis_number) ?></td>
                <td><?= h($organizations->nif_number) ?></td>
                <td><?= h($organizations->trade_registery_number) ?></td>
                <td><?= h($organizations->imposition_article) ?></td>
                <td><?= h($organizations->created) ?></td>
                <td><?= h($organizations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Organizations', 'action' => 'view', $organizations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Organizations', 'action' => 'edit', $organizations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organizations', 'action' => 'delete', $organizations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
