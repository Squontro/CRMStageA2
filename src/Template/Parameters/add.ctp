<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parameter $parameter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parameters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parameter Types'), ['controller' => 'ParameterTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parameter Type'), ['controller' => 'ParameterTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Parameters'), ['controller' => 'UserParameters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Parameter'), ['controller' => 'UserParameters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parameters form large-9 medium-8 columns content">
    <?= $this->Form->create($parameter) ?>
    <fieldset>
        <legend><?= __('Add Parameter') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('code');
            echo $this->Form->control('parameter_type_id', ['options' => $parameterTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
