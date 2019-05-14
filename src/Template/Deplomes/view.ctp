<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deplome $deplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deplome'), ['action' => 'edit', $deplome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deplome'), ['action' => 'delete', $deplome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deplome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deplomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deplome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emp Deplomes'), ['controller' => 'EmpDeplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp Deplome'), ['controller' => 'EmpDeplomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deplomes view large-9 medium-8 columns content">
    <h3><?= h($deplome->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($deplome->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deplome->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Emp Deplomes') ?></h4>
        <?php if (!empty($deplome->emp_deplomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Deplome Id') ?></th>
                <th scope="col"><?= __('Date Deplome') ?></th>
                <th scope="col"><?= __('Place Deplome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($deplome->emp_deplomes as $empDeplomes): ?>
            <tr>
                <td><?= h($empDeplomes->employee_id) ?></td>
                <td><?= h($empDeplomes->deplome_id) ?></td>
                <td><?= h($empDeplomes->date_deplome) ?></td>
                <td><?= h($empDeplomes->place_deplome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmpDeplomes', 'action' => 'view', $empDeplomes->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmpDeplomes', 'action' => 'edit', $empDeplomes->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmpDeplomes', 'action' => 'delete', $empDeplomes->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $empDeplomes->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
