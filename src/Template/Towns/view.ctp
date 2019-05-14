<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Town $town
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Town'), ['action' => 'edit', $town->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Town'), ['action' => 'delete', $town->id], ['confirm' => __('Are you sure you want to delete # {0}?', $town->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Towns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Town'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dairas'), ['controller' => 'Dairas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daira'), ['controller' => 'Dairas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="towns view large-9 medium-8 columns content">
    <h3><?= h($town->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Daira') ?></th>
            <td><?= $town->has('daira') ? $this->Html->link($town->daira->name, ['controller' => 'Dairas', 'action' => 'view', $town->daira->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($town->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($town->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($town->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Town Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('School Level Id') ?></th>
                <th scope="col"><?= __('Civilitty') ?></th>
                <th scope="col"><?= __('Matricule') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Laste Name') ?></th>
                <th scope="col"><?= __('Maiden Name') ?></th>
                <th scope="col"><?= __('Date Birth') ?></th>
                <th scope="col"><?= __('Presume') ?></th>
                <th scope="col"><?= __('Last Name Father') ?></th>
                <th scope="col"><?= __('First Name Mother') ?></th>
                <th scope="col"><?= __('Last Name Mother') ?></th>
                <th scope="col"><?= __('Fami Situation') ?></th>
                <th scope="col"><?= __('Sex') ?></th>
                <th scope="col"><?= __('Adresse') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone Numbre') ?></th>
                <th scope="col"><?= __('Postal Code') ?></th>
                <th scope="col"><?= __('Nbr Child') ?></th>
                <th scope="col"><?= __('Nationality') ?></th>
                <th scope="col"><?= __('Nationality Service') ?></th>
                <th scope="col"><?= __('Blood Group') ?></th>
                <th scope="col"><?= __('Ccp Number') ?></th>
                <th scope="col"><?= __('Ss Number') ?></th>
                <th scope="col"><?= __('Salary') ?></th>
                <th scope="col"><?= __('Anem Number') ?></th>
                <th scope="col"><?= __('Anem') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Obs') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($town->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->town_id) ?></td>
                <td><?= h($employees->service_id) ?></td>
                <td><?= h($employees->school_level_id) ?></td>
                <td><?= h($employees->civilitty) ?></td>
                <td><?= h($employees->matricule) ?></td>
                <td><?= h($employees->first_name) ?></td>
                <td><?= h($employees->laste_name) ?></td>
                <td><?= h($employees->maiden_name) ?></td>
                <td><?= h($employees->date_birth) ?></td>
                <td><?= h($employees->presume) ?></td>
                <td><?= h($employees->last_name_father) ?></td>
                <td><?= h($employees->first_name_mother) ?></td>
                <td><?= h($employees->last_name_mother) ?></td>
                <td><?= h($employees->fami_situation) ?></td>
                <td><?= h($employees->sex) ?></td>
                <td><?= h($employees->adresse) ?></td>
                <td><?= h($employees->email) ?></td>
                <td><?= h($employees->phone_numbre) ?></td>
                <td><?= h($employees->postal_code) ?></td>
                <td><?= h($employees->nbr_child) ?></td>
                <td><?= h($employees->nationality) ?></td>
                <td><?= h($employees->nationality_service) ?></td>
                <td><?= h($employees->blood_group) ?></td>
                <td><?= h($employees->ccp_number) ?></td>
                <td><?= h($employees->ss_number) ?></td>
                <td><?= h($employees->salary) ?></td>
                <td><?= h($employees->anem_number) ?></td>
                <td><?= h($employees->anem) ?></td>
                <td><?= h($employees->photo) ?></td>
                <td><?= h($employees->obs) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
