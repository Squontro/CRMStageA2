<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentType $documentType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document Type'), ['action' => 'edit', $documentType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document Type'), ['action' => 'delete', $documentType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Document Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emp Documents'), ['controller' => 'EmpDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp Document'), ['controller' => 'EmpDocuments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documentTypes view large-9 medium-8 columns content">
    <h3><?= h($documentType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($documentType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($documentType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Emp Documents') ?></h4>
        <?php if (!empty($documentType->emp_documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Document Type Id') ?></th>
                <th scope="col"><?= __('Date Eta') ?></th>
                <th scope="col"><?= __('Date Exp') ?></th>
                <th scope="col"><?= __('Blob Doc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($documentType->emp_documents as $empDocuments): ?>
            <tr>
                <td><?= h($empDocuments->employee_id) ?></td>
                <td><?= h($empDocuments->document_type_id) ?></td>
                <td><?= h($empDocuments->date_eta) ?></td>
                <td><?= h($empDocuments->date_exp) ?></td>
                <td><?= h($empDocuments->blob_doc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmpDocuments', 'action' => 'view', $empDocuments->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmpDocuments', 'action' => 'edit', $empDocuments->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmpDocuments', 'action' => 'delete', $empDocuments->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $empDocuments->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
