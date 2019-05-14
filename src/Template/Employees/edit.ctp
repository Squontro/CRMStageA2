<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                            <div class="col-sm-3"><!--left col-->
      
      <div class="text-center">
         <?= $this->Form->create($employee ,  ['type' =>'file'] ); ?>
         <br><br>
         <img src="<?php echo $this->Url->build('/webroot/images/avatar-2.png') ; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
         <br><br>   
                                                                <?php
                                                                echo $this->Form->input('photo',[ 
                                                               'label'=>false,
                                                              'class'=>'form-control',
                                                               'type' => 'file',
                                                               'placeholder'=>__('Enter a picture...')
                                                                  ]);
                                                                   ?>
                                                                  
                                                                   <!-- obs -->
                                              <label for="observation" class="col-sm-2 col-form-label"> <?php echo  __('Observation') ; ?></label>
                                              <br>
                                            <?php 
                                            echo $this->Form->input('obs',array('class'=>'form-control','label'=>false)); ?>
                                                    
                                                 
      </div>
      <br>      
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>       
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
        </div><!--/col-3-->


 <div class="col-sm-8">              
         <div class="container">
  <ul class="nav-tabs nav nav-justified">
    <li class="nav-item">
      <a href="#infopers" class="nav-link active" data-toggle="tab"><?php echo  __('Personnel Info') ; ?></a>
    </li>
    <li class="nav-item">
    <a href="#servi" class="nav-link" data-toggle="tab"><?php echo  __('Service') ; ?></a>
    </li>
     <li class="nav-item">
      <a href="#Degree" class="nav-link" data-toggle="tab" ><?php echo  __('Degrees') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#langua" class="nav-link" data-toggle="tab" ><?php echo  __('Languages') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#exper" class="nav-link" data-toggle="tab" ><?php echo  __('Experiences') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#quelif" class="nav-link" data-toggle="tab" ><?php echo  __('Qualifications') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#docum" class="nav-link" data-toggle="tab" ><?php echo  __('Documents') ; ?></a>
    </li>
     <li class="nav-item">
      <a href="#fami" class="nav-link " data-toggle="tab" ><?php echo  __('Family') ; ?></a>
    </li>
  </ul>
   <div class="tab-content container">
        <div class="tab-pane active" id="infopers">
          <br>
                                                        <!-- Matiricule -->
                                                        <div class="form-group row">  
                                                         <label for="matricule" class="col-sm-2 col-form-label"> <?php echo  __('Code*') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('matricule',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                            </div>
                                                        <!-- First name -->
                                                <div class="form-group row">
                                                <label for="first_name" class="col-sm-2 col-form-label"><?php echo  __('First name*') ; ?></label> 
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('first_name',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- Last name -->
                                                <div class="form-group row">
                                                <label for="laste_name" class="col-sm-2 col-form-label"><?php echo  __('Last name*') ; ?></label>        
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('laste_name',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- maiden_name -->
                                                <div class="form-group row">
                                               <label for="maiden_name" class="col-sm-2 col-form-label"><?php echo  __('Maiden name') ; ?></label>        
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('maiden_name',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- Date Birth -->
                                                        <div class="form-group row">
                                                                <label for="date_birth" class="col-sm-2 col-form-label"><?php echo  __('Date Of Birth') ; ?></label>
                                                            <div class="col-sm-4 col-lg-2">
                                                                <input class="form-control" name="date_birth" type="date" placeholder="dd/mm/yyyy"  />
                                                            </div>
                                                   
                                                                <label for="Presume" class="col-form-label"><?php echo  __('Presumed') ; ?></label>
                                                            <div class="col-sm-2 col-lg-2">
                                                                <?php echo $this->Form->input('presumecheck',['type' =>'checkbox' , 'label'=>false]);
                                                                ?>
                                                            </div>
                                                            <div class="col-sm-2 col-lg-2" id="presume_div">
                                                                <?php 
                                                                 echo $this->Form->input('presume',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                     
                               </div>                         
                                                        <!-- Town -->
                                                         <div class="form-group row">
                                                            <label for="town" class="col-sm-2 col-form-label"><?php echo  __('Town') ; ?></label> 
                                                            <div class="col-sm-8 col-lg-8" id="town-div">
                                                               <?php
                                                               echo $this->Form->select('town_id',$towns , [
                                                                'empty' => '--Select Town--',
                                                                'class' =>'js-example-basic-single']) ?>
                                                            </div>
                                                            <div class="btn-group quick-actions">
                            <div id="dialogModalTown">
                            <!-- the external content is loaded inside this tag -->
                            <div id="contentWrapTown"></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                             </i>
                            </button>
                               <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "Towns", "action" => "addTown"),
                                        array(
                                            "class" => "btn overlayTown",
                                            "escape" => false,
                                            "title" => __("Add Town")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "Towns", "action" => "EditTown"),
                                        array(
                                            "class" => "btn",
                                            "escape" => false,
                                            "title" => __("Edit Town")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "Towns", "action" => "DeleteTown"),
                                        array(
                                            "class" => "btn overlayDeleteTown",
                                            "escape" => false,
                                            "title" => __("Delete Town")
                                        )); ?>
                                </li>
  </ul>                       
  </div>                       
    </div>                    
     <?php
                        echo "<div style='clear:both; padding-top: 6px;'></div>"; ?>
                        <!-- Civility -->
                                                       <div class="form-group row">
                                                    <label for="civilitty" class="col-sm-2 col-form-label"><?php echo  __('Civility') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php  
                                                                echo $this->Form->input('civilitty', [
                                     'label' => false ,
                                     'value' => 'G'  ,
                                     'class' =>'form-control form-control-default' ,            
                                      'options' => [
                                                   ['value' =>'G', 'text' => __('Gentleman')],
                                                   ['value' =>'M', 'text' => __('Mrs')],
                                                   ['value' =>'S', 'text' => __('Miss')] ]
                                                   ]);  
                                                   ?>
                                                            </div>
                                                        </div>
                                                         <!-- sex -->
                                                     <div class="row">
                                                            <label class="col-sm-2 col-form-label"><?php echo  __('Gender') ; ?></label>
                                                            <div class="col-sm-8">
                                                            <?php  echo $this->Form->input('sex' ,[
                                                                'label' => false ,
                                                                'type' => 'radio',
                                                                'value' => 'M' ,
                                                                 'templates' => [ 
                                                'radioWrapper' => '<div class="form-check form-check-inline">{{label}}</div>'
                                                                                ],
                                                                'options' => [
                                                                             ['value' =>'M', 'text' => __('Male')],
                                                                             ['value' =>'F', 'text' => __('Female')]
                                                                             ]
                                     ]);
                                     ?>
                                 </div>
                                        </div>
                                    <!--Fami_Situation --> 
                                    <div class="form-group row">
                                    <label for="family_situation" class="col-sm-2 col-form-label"><?php echo  __('Family Situation') ; ?></label>
                                                            <div class="col-sm-5">
                                                            <?php echo $this->Form->input('Fami_Situation' ,[
                                                            'label' => false ,
                                                            'type' => 'radio' ,
                                                             'value' => 'S'  ,
                                                             'templates' => [ 
                                                                  'radioWrapper' => '<div class="form-check form-check-inline">{{label}}</div>',
                                                                                ], 
                                                'options' => [
                                                ['value' =>'S', 'text' => __('Single') ],
                                                ['value' =>'M', 'text' => __('Married')],
                                                ['value' =>'D', 'text' => __('Divorce')] ,
                                                ['value' =>'E', 'text' => __('Separate')]
                                                ]
                                   ]);
                                   ?>
                                        </div>
                                                                                      
                                                        <!-- nbr_child -->
                                               <div   class="col-sm-8 col-lg-3" id="nbrchild_div">
                                                                <?php 
                                                                 echo $this->Form->input('nbr_child',array('class'=>'form-control','label'=>false , 'placeholder'=>__('Nbr children'))); ?>
                                                        
                                                        </div>
                                                      </div>
                                                        <!-- nationality -->
                                                       <div class="form-group row">                                                
                                                              <label for="nationality" class="col-sm-2 col-form-label"><?php echo  __('Nationality') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('nationality',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- nationality_service -->
                                                       <div class="form-group row">                         
                                                                <label for="nationality" class="col-sm-2 col-form-label"><?php echo  __('National service') ; ?></label>
                                                      
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('nationality_service',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- school_level_id -->
                                                     <div class="form-group row">
                                                    <label for="service" class="col-sm-2 col-form-label"><?php echo  __('School level') ; ?></label> 
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php
                                                               echo $this->Form->select('school_level_id',$schoolLevels , [
                                                                 'empty' => '--Select school level--',
                                                                'class' =>'js-example-basic-single']) ?>
                                                            </div>
                                                            <div class="btn-group quick-actions">
                            <div id="dialogModallevelstude">
                                <!-- the external content is loaded inside this tag -->
                            <div id="contentWraplevelstude"></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                            </i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                            <li>
                            <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "Services", "action" => "addService"),
                                        array(
                                            "class" => "btn overlaySchlllevel",
                                            "escape" => false,
                                            "title" => __("Add Service")
                                        )); ?>
                            </li>
                            <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "Services", "action" => "EditService"),
                                        array(
                                            "class" => "btn overlayEditService",
                                            "escape" => false,
                                            "title" => __("Edit Service")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "Services", "action" => "EditService"),
                                        array(
                                            "class" => "btn overlayDeleteService",
                                            "escape" => false,
                                            "title" => __("Delete Service")
                                        )); ?>
                                </li>
  </ul>                       
    </div>  
    </div>                  
    <?php echo "<div style='clear:both; padding-top: 0px;'></div>"; ?>
    <!-- last_name_father -->
                                                        <div class="form-group row">
                                                           
                                                                <label for="last_name_father" class="col-sm-2 col-form-label"><?php echo  __('last name of father') ; ?>  </label>
                                                    
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('last_name_father',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- first_name_mother -->
                                                        <div class="form-group row">
                                                            
                                                                <label for="first_name_mother" class="col-sm-2 col-form-label"><?php echo  __('First name of mother') ; ?> </label>
                                                 
                                                            <div class="col-sm-8 col-lg-8">
                                                                 <?php 
                                                                 echo $this->Form->input('first_name_mother',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- last_name_mother -->
                                                <div class="form-group row">
                                                 <label for="last_name_mother"class="col-sm-2 col-form-label"><?php echo  __('Last name of mother') ; ?> </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('last_name_mother',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>  
         </div>
         <div class="tab-pane" id="servi">
        <br>
          <!-- service_id -->
                                                    <div class="form-group row">
                                                    <label for="service" class="col-sm-2 col-form-label"><?php echo  __('Service') ; ?></label> 
                                                    <div class="col-sm-8 col-lg-8" id="service-div">
                                                    <?php
                                                               echo $this->Form->select('service_id',$services ,[
                                                                'label' => false ,
                                                                'id' =>'service_id' ,
                                                                'empty' => '--Select Service--- ',
                                                                'class' =>'js-example-basic-single ']) ;?>
                                                           </div>
                                                                
                        <div class="btn-group quick-actions">
                            <div id="dialogModalService" >
                                <!-- the external content is loaded inside this tag -->
                            <div id="contentWrapService" ></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                            </i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                            <li>
                                <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "Services", "action" => "showService"),
                                        array(
                                            "class" => "btn overlayService",
                                            "escape" => false,
                                            "title" => __("Add Service")
                                        )); ?>
                                 
                                    </li>                    
                            
                            <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "Services", "action" => "EditService"),
                                        array(
                                            "class" => "btn overlayEditService",
                                            "escape" => false,
                                            "title" => __("Edit Service")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "Services", "action" => "EditService"),
                                        array(
                                            "class" => "btn overlayDeleteService",
                                            "escape" => false,
                                            "title" => __("Delete Service")
                                        )); ?>
                                </li>
  </ul>                       
    </div>  
    </div>                        
                        <?php
                        echo "<div style='clear:both; padding-top: 0px;'></div>"; ?>
                        <!-- adresse -->
                                        <div class="form-group row">      
                                        <label for="adresse" class="col-sm-2 col-form-label"><?php echo  __('Adress') ; ?>  </label>
                                        <div class="col-sm-8 col-lg-8">
                                        <?php 
                                        echo $this->Form->input('adresse',array('class'=>'form-control','label'=>false)); ?>
                                        </div>
                                        </div>
                                                        <!-- email -->
                                                        <div class="form-group row">
                                                        <label for="email" class="col-sm-2 col-form-label"><?php echo  __('E-mail') ; ?>  </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('email',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- phone_numbre -->
                                                        <div class="form-group row">
                                                            
                                                                <label for="phone_numbre" class="col-sm-2 col-form-label"><?php echo  __('Phone') ; ?></label>
                                                        
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('phone_numbre',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- postal_code -->
                                                        <div class="form-group row"> 
                                                                <label for="postal_code" class="col-sm-2 col-form-label"><?php echo  __('Postal code') ; ?>  </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('postal_code',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        
                                                         <!-- blood_group -->
                                                        <div class="form-group row">
                                                 <label for="blood_group" class="col-sm-2 col-form-label"><?php echo  __('Blood group') ; ?></label>
                                                   
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('blood_group',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>                                                   
                                                         <!-- ccp_number -->
                                                        <div class="form-group row">
                                                        
                                                                <label for="ccp_number" class="col-sm-2 col-form-label"><?php echo  __('CCP number') ; ?></label>
                                                      
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('ccp_number',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- ss_number -->
                                                        <div class="form-group row">
                                                                <label for="ss_number" class="col-sm-2 col-form-label"><?php echo  __('SS number') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('ss_number',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- salary -->
                                                        <div class="form-group row">                                      
                                                         <label for="salary" class="col-sm-2 col-form-label"><?php echo  __('Salary') ; ?></label>                                      
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('salary',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- anem -->
                                                        <div class="form-group row">
                                                            
                                                                <label for="anem" class="col-sm-2 col-form-label"><?php echo  __('ANEM') ; ?></label>
                                                            
                                                            <div class="col-sm-4 col-lg-4">
                                                               <?php 
                                                                 echo $this->Form->input('anem',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                       
                                                         <!-- anem_number -->
                                                                                   
                                                 <label for="anem_number" class="col-sm-2 col-form-label"><?php echo  __('ANEM number') ; ?></label>
                                                            <div class="col-sm-4 col-lg-2">
                                                                <?php 
                                                                 echo $this->Form->input('anem_number',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div> 
                                                         
                                                    
                               
         </div>
         <!--Tab Degree-->
         <div class="tab-pane" id="Degree">
          <br>
         <h1> This is the Degree page </h1>
          </div>
 <!--fin Tab LAnguages-->
 <!--Tab LAnguages-->
         <div class="tab-pane" id="langua">
          <br>
         <h1> This is the Language page </h1>
          </div>
 <!--fin Tab LAnguages-->
 <!--Tab Experiences-->
         <div class="tab-pane" id="exper">
          <br>
                                                       <div class="table-responsive"> 
<div id="EmployeeExperienceGrid"></div>
</div>

                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                           <?= $this->Form->button(__('Submit'),['class' =>'btn btn-primary m-b-0']) ?>                                  
                                        </div>
                                    </div>
                                    <?= $this->Form->end() ?>  
          </div>
 <!--fin Tab Experiences-->
    </div>
    </div><!--/col-9-->                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




       <script>

$(document).ready(function() {
    //prepare the dialog  
    $("#dialogModalService").dialog({
            autoOpen: false,
            height: 300,
            width: 600,
            dialogClass: "modal-content",
            show: {
                effect: "blind",
                duration: 400
                  },
            hide: {
                effect: "blind",
                duration: 500
                  },
            closeText: "hide",
            modal: true ,
            buttons: {
                    "OK": function() {
                                  form = $("#service-form").serialize();
                                  var d = $.Deferred();
                                  $.ajax({
                                  type: "POST",
                                  data: form, 
                                  url: "<?= $this->Url->build(['controller'=>'services','action'=>'addservice'])?>" ,    
                                  dataType: "json", 
                                  success: function(json) {
                                    if (json.response === true)
                                   { 
                                              $('#dialogModalService').dialog('close');  
                                               var serviceId = json.serviceId;
                                               var url ='/GestionRH/services/getServices'+'?id='+serviceId ;
                                                $.ajax({
                                                type: 'get',
                                                url: url , 
                                                 success: function(response) {
                                                         $('#service_id').html(response);
                                                                             },
                                                      error: function(e) {
                                                       alert("An error occurred: " + e.responseText.message);
                                                       console.log(e);
                                                         }
                                                         });                                            
                                   } ;
                                  d.resolve(response);
                                   },
                                   error: function(result) {
                                   d.reject();
                                   }
                                   });

                                  $( this ).dialog( "close" );
                                    },
                    Cancel: function() {
                        $( this ).dialog( "close" );
                    }
                }
            }); 
       });          
    //respond to click event on anything with 'overlay' class
    $(document).on('click','.overlayService',function(e){
        e.preventDefault();
    $.ajax({
        type: "GET",
        url: $(this).attr("href"),
        ContentType : 'application/json',
        success: function(result) {
            $('#contentWrapService').html(result);    
            $('#dialogModalService').dialog('option', 'title', 'Add Service');
            $('#dialogModalService').dialog('open');
        },
        error: function(result) {
        }
    });

    
});

    //presume
    presume= $("#presume_div") ;
    presume.hide() ;
    nbrchild_div= $("#nbrchild_div") ;
    nbrchild_div.hide() ;


$(document).on('change','#presumecheck',function(e){
    presume= $("#presume_div") ;
    var checkBox = document.getElementById("presumecheck");
    if (checkBox.checked == true){
    presume.show() ; 
  } else {
   presume.hide() ; 
  }
}) ;
//Nbr Children
  $(document).on('change',"input[name='Fami_Situation']",function(e){
    nbrchild_div= $("#nbrchild_div") ;
   var value = $(this).val() ;
   if (value=="S") {
    nbrchild_div.hide();
  } else {
    nbrchild_div.show();
  }
});

 
</script>



<script>
$(document).ready(function(e) {
   var i=1 ;
   //add row to table
   $("#add").click(function(e) { 
  var html='<tr id="row'+i+'"><td><div class="input text"><label for="experiences-'+i+'-experience">Experience</label><input type="text" name="experiences['+i+'][experience]" maxlength="250" id="experiences-'+i+'-experience"></div></td>' ;          
    html=html+'<td><div class="input text"><label for="experiences-'+i+'-date-exp-start">Date Start</label><input type="text" name="experiences['+i+'][date_exp_start]"  id="experiences-'+i+'-date-exp-start"></div> </td>' ;                 
   html=html+'<td><div class="input text"><label for="experiences-'+i+'-date-exp-start">Date End</label><input type="text" name="experiences['+i+'][date_exp_end]"  id="experiences-'+i+'-date-exp-start"></div></td>' ;
   html=html+'<td><button name="remove"  class="btn btn-danger btn-remove"  id="'+i+'"> X </button></td></tr>' ;
  $("#dynamic_field").append(html) ;
      i++ ; 

   }) ;

   //Remove row from table
     $(document).on('click' ,'.btn-remove' , function(e){
      var Button_id=$(this).attr("id") ;
      $("#row"+Button_id+"").remove();
      i-- ;
     }) ;

});
</script>




<script>
$(function() {
    $.ajax({  //Load Employee
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'employees','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
    .done(function(employees) {
       employees.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#EmployeeExperienceGrid").jsGrid({
    width: "100%",
    height: "680px",
    filtering: true, 
    sorting: true,
    paging: true,
    editing: true,
    inserting: true,
    autoload: true,
    pageSize: 12,
    pageButtonCount: 5,
    confirmDeleting: true,
    deleteConfirm: "Are you sure ?",
  controller: {
                loadData: function (filter) {
                    var d = $.Deferred();
                        $.ajax({
                        type: "GET",
                        url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0)   ; 
                                return result ;
                            });
                            d.resolve(result);
                        });
                        return d.promise();
                    },
          // Iserting Servcie
                insertItem: function (item) {
                     var d = $.Deferred();
                    $.ajax({
                    type: "POST",
                    data: JSON.stringify(item) ,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'addJson'])?>" ,               
                    }).done(function (response) {   
                    console.log( "done: " + JSON.stringify(response) ); 
                    d.resolve(response);
                    }).fail(function( msg ) {
                    d.reject();
                    });
                    },
                    // Updatig Servcie
                updateItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "PUT",
                        data: JSON.stringify(item) ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'editJson'])?>" ,             
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        },
                   // Deleting Servcie
                deleteItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "DELETE",
                        data: JSON.stringify(item) ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'compagnes','action'=>'deleteJson'])?>" ,           
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        }
            },
fields: [
            { name: "id", type: "text" , css: "hide", width: 0},
            { name: "employee_id", type: "select", title: "Employee", width: 100 , align: "left" , items:employees, valueField: "id", textField: "first_name"  ,
                validate: { message: "Employee should be specified", validator: function(value) { return value > 0; } }
             } , 
            { name: "experience", type: "text", title: "Experience", width: 200 , align: "left"  , validate :"required"  },
            { name: "date_exp_start", type: "text", title: "Start date", width: 40 , align: "left"    },
            { name: "date_exp_end", type: "text", title: "End date", width: 40 , align: "center"   },
            { type: "control", width: 50}
        ]
  }) ;
});
});
</script>







             