<?php
/** @var $result array */
/** @var $type tinyint */
/** @var $saved bool */
/** @var $supplierId int */
/** @var $idSelect int */
/*if($result){*/
    /** @noinspection PhpIncludeInspection 
    include("ctp/script.ctp");*/
    echo $this->Form->create('Service');
    echo "<div class='form-group'>".$this->Form->select('department_id',$departments , [
                                        'label' => false ,
                                        'id' =>'department_id' ,
                                        'empty' => '--Select Department--- ',
                                        'class' =>'form-control'])."</div>"; 
    echo "<div class='form-group'>".$this->Form->input('name', array(
            'label' => __('Name'),
            'class' => 'form-control',
        ))."</div>";
        ?>

     <button onclick="addservice()">Save Service</button>
   <?php echo $this->Form->end(); ?>

