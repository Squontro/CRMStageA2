<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parameter[]|\Cake\Collection\CollectionInterface $parameters
 */
$this->assign('title', 'Home Page');
?>

<div class= "home-wrapper"> 
  <h3 class= "select-page"><?= __('Select the page you want to go to :'); ?></h3>
  <nav class= "select-nav" >
    <ul class= "side-nav">
      <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Parameters'), ['controller' => 'Parameters', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
    </ul>
  </nav>
</div>
