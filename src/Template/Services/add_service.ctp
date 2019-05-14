<?php
/** @var $result array */
/** @var $type tinyint */
/** @var $saved bool */
/** @var $supplierId int */
/** @var $idSelect int */
/*if($result){*/

    if ($saved == true){ //will only be true if saved OK in controller from ajax save above
        $url = array(
    "controller" => "services",
    "action" => "getServices",
    $serviceId
); ?>
       <script>
        $(document).ready(function() {
        $('#dialogModalService').dialog('close');  //close containing dialog
       location.reload();
            });

    </script>

   <?php
    }

    /** @noinspection PhpIncludeInspection 
    include("ctp/script.ctp");*/
    echo $this->Form->create('Service');
    echo "<div class='form-group'>".$this->Form->select('department_id',$departments , [
                                        'label' => false ,
                                        'empty' => '--Select Department--- ',
                                        'class' =>'form-control'])."</div>"; 
    echo "<div class='form-group'>".$this->Form->input('name', array(
            'label' => __('Name'),
            'class' => 'form-control',
        ))."</div>";

     echo $this->Form->button(__('Save'),['id'=>'bt_save']);
    echo $this->Form->end(); 

    //echo $this->Js->writeBuffer(); ///assuming this view is rendered without the default layout, make sure you write out the JS buffer at the bottom of the page
    die();

/*    
}
else {
    ?>
    <div id="flashMessage" class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo __("You don't have permission to add.") ?>
    </div>
    <?php  die();

}
*/


