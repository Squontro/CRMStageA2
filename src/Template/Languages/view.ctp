<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employe Languages'), ['controller' => 'EmployeLanguages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employe Language'), ['controller' => 'EmployeLanguages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="languages view large-9 medium-8 columns content">
    <h3><?= h($language->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($language->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abr Lang') ?></th>
            <td><?= h($language->abr_lang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($language->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employe Languages') ?></h4>
        <?php if (!empty($language->employe_languages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Competance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($language->employe_languages as $employeLanguages): ?>
            <tr>
                <td><?= h($employeLanguages->employee_id) ?></td>
                <td><?= h($employeLanguages->language_id) ?></td>
                <td><?= h($employeLanguages->competance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployeLanguages', 'action' => 'view', $employeLanguages->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeLanguages', 'action' => 'edit', $employeLanguages->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeLanguages', 'action' => 'delete', $employeLanguages->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeLanguages->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
