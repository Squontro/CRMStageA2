<?php
/** @var $result array */
/** @var $type tinyint */
/** @var $saved bool */
/** @var $supplierId int */
/** @var $idSelect int */
/*if($result){*/
    /** @noinspection PhpIncludeInspection 
    include("ctp/script.ctp");*/
    $result = "<div class='form-group'>" 
    . $this->Form->create('Service' , ['id'=>'service-form']).
    
    "<div class='form-group row'><label for='department' class='col-sm-2 col-form-label'>Depertment</label> 
    <div class='col-sm-6'>"
    .$this->Form->select('department_id',$departments , [
                                        'label' => false ,
                                        'id' =>'department_id' ,
                                        'empty' => '--Select Department--- ',
                                        'class' =>'form-control']).
     "</div></div>
     <div class='form-group row'><label for='service' class='col-sm-2 col-form-label'>Name</label>".
     "<div class='col-sm-6'>"
     .$this->Form->input('name', array(
            'label' => false,
            'class' => 'form-control',
        )).
     "</div></div></div>" 
     .$this->Form->end()  ;
  echo $result;
  