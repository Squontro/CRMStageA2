<div class="row">
  
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                  
         <div class="container">
  <ul class="nav-tabs nav nav-justified">
    <li class="nav-item">
      <a href="#infopers" class="nav-link active" data-toggle="tab"><?php echo  __('Personnel Info') ; ?></a>
    </li>
    <li class="nav-item">
    <a href="#othersinfo" class="nav-link" data-toggle="tab"><?php echo  __('Others Info') ; ?></a>
    </li>
    <li class="nav-item">
    <a href="#admininfo" class="nav-link" data-toggle="tab"><?php echo  __('Administ Info') ; ?></a>
    </li>
     <li class="nav-item">
      <a href="#Degree" class="nav-link" data-toggle="tab" ><?php echo  __('Degrees & Experiences ') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#qualif" class="nav-link" data-toggle="tab" ><?php echo  __('Qualifications') ; ?></a>
    </li>
     <li class="nav-item">
      <a href="#fami" class="nav-link " data-toggle="tab" ><?php echo  __('Family') ; ?></a>
    </li>
    <li class="nav-item">
      <a href="#docum" class="nav-link" data-toggle="tab" ><?php echo  __('Documents') ; ?></a>
    </li>
  </ul>
  <?= $this->Form->create($employee ,  ['type' =>'file'] ); ?> 
   <div class="tab-content container">
        <div class="tab-pane active" id="infopers">
          <div class="row">
     <div class="col-sm-9">
      <br>      
     <!-- Matiricule -->
                                                        <div class="form-group row">  
                                                         <label for="matricule" class="col-sm-3 col-form-label"> <?php echo  __('Code*') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('matricule',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                            </div>
                                                        <!-- First name -->
                                                <div class="form-group row">
                                                <label for="first_name" class="col-sm-3 col-form-label"><?php echo  __('First name*') ; ?></label> 
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('first_name',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- Last name -->
                                                <div class="form-group row">
                                                <label for="laste_name" class="col-sm-3 col-form-label"><?php echo  __('Last name*') ; ?></label>        
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('laste_name',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- Date Birth -->
                                                        <div class="form-group row">
                                                                <label for="date_birth" class="col-sm-3 col-form-label"><?php echo  __('Date Of Birth') ; ?></label>
                                                            <div class="col-sm-4 col-lg-3">
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
                                                            <label for="town" class="col-sm-3 col-form-label"><?php echo  __('Town') ; ?></label> 
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
     </div>
     <div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <br>
         <img src="<?php echo $this->Url->build('/webroot/images/avatar-2.png') ; ?>" class="avatar img-circle img-thumbnail" alt="avatar">  
                                                                <br>
                                                                <br>
                                                                <?php
                                                                echo $this->Form->input('photo',[ 
                                                               'label'=>false,
                                                              'class'=>'form-control',
                                                               'type' => 'file',
                                                               'placeholder'=>__('Enter a picture...')
                                                                  ]);
                                                                   ?>                                                                                                   
      </div>
        </div><!--/col-3-->
   </div>
<div class="row">
  <div class="col-sm-9">
                               
                        <!-- Civility -->
                                                       <div class="form-group row">
                                                    <label for="civilitty" class="col-sm-3 col-form-label"><?php echo  __('Civility') ; ?></label>
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
                                                            <label class="col-sm-3 col-form-label"><?php echo  __('Gender') ; ?></label>
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
                                    <label for="family_situation" class="col-sm-3 col-form-label"><?php echo  __('Family Situation') ; ?></label>
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
                                                              <label for="nationality" class="col-sm-3 col-form-label"><?php echo  __('Nationality') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('nationality',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div> 
  </div>
  <div class="col-sm-3">
  </div> 
         </div>
       </div>
       <!--Tab others info-->
         <div class="tab-pane" id="othersinfo">
         <div class="row">
     <div class="col-sm-9">
      <br>
           <!-- adresse -->
                                        <div class="form-group row">      
                                        <label for="adresse" class="col-sm-3 col-form-label"><?php echo  __('Adress') ; ?>  </label>
                                        <div class="col-sm-8 col-lg-8">
                                        <?php 
                                        echo $this->Form->input('adresse',array('class'=>'form-control','label'=>false)); ?>
                                        </div>
                                        </div>
                                                        <!-- email -->
                                                        <div class="form-group row">
                                                        <label for="email" class="col-sm-3 col-form-label"><?php echo  __('E-mail') ; ?>  </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('email',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- phone_numbre -->
                                                        <div class="form-group row">
                                                            
                                                                <label for="phone_numbre" class="col-sm-3 col-form-label"><?php echo  __('Phone') ; ?></label>
                                                        
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('phone_numbre',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- postal_code -->
                                                        <div class="form-group row"> 
                                                                <label for="postal_code" class="col-sm-3 col-form-label"><?php echo  __('Postal code') ; ?>  </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('postal_code',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        
         <!-- nationality_service -->
                                                       <div class="form-group row">                         
                                                <label for="nationality" class="col-sm-3 col-form-label"><?php echo  __('National service') ; ?></label>      
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('nationality_service',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- blood_group -->
                                                        <div class="form-group row">
                                                 <label for="blood_group" class="col-sm-3 col-form-label"><?php echo  __('Blood group') ; ?></label>
                                                   
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('blood_group',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>  
                                                         <!-- last_name_father -->
                                                        <div class="form-group row">
                                                           
                                                                <label for="last_name_father" class="col-sm-3 col-form-label"><?php echo  __('last name of father') ; ?>  </label>
                                                    
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('last_name_father',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- first_name_mother -->
                                                        <div class="form-group row">
                                                            
                                                                <label for="first_name_mother" class="col-sm-3 col-form-label"><?php echo  __('First name of mother') ; ?> </label>
                                                 
                                                            <div class="col-sm-8 col-lg-8">
                                                                 <?php 
                                                                 echo $this->Form->input('first_name_mother',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- last_name_mother -->
                                                <div class="form-group row">
                                                 <label for="last_name_mother" class="col-sm-3 col-form-label"><?php echo  __('Last name of mother') ; ?> </label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('last_name_mother',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div> 
      <br>      
    </div>
    <div class="col-sm-3">
  </div>
          </div>
        </div>
 <!--fin Tab others info-->
         <div class="tab-pane" id="admininfo">
          <div class="row">
     <div class="col-sm-9">
      <br>
      <!-- service_id -->
                                                    <div class="form-group row">
                                                    <label for="service" class="col-sm-3 col-form-label"><?php echo  __('Service') ; ?></label> 
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
                        <!-- job_id -->
                                                    <div class="form-group row">
                                                    <label for="service" class="col-sm-3 col-form-label"><?php echo  __('Job') ; ?></label> 
                                                    <div class="col-sm-8 col-lg-8" id="service-div">
                                                    <?php
                                                    echo $this->Form->select('job_id',$jobs ,[
                                                                'label' => false ,
                                                                'id' =>'job_id' ,
                                                                'empty' => '--Select Job--- ',
                                                                'class' =>'js-example-basic-single ']) ;?>
                                                           </div>                                                      
                        <div class="btn-group quick-actions">
                            <div id="dialogModalJob" >
                                <!-- the external content is loaded inside this tag -->
                            <div id="contentWrapJob" ></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                            </i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                            <li>
                                <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "Jobs", "action" => "showJob"),
                                        array(
                                            "class" => "btn overlayJob",
                                            "escape" => false,
                                            "title" => __("Add Job")
                                        )); ?>
                                 
                                    </li>                    
                            
                            <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "Jobs", "action" => "EditJob"),
                                        array(
                                            "class" => "btn overlayEditJob",
                                            "escape" => false,
                                            "title" => __("Edit Job")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "Jobs", "action" => "DeleteJob"),
                                        array(
                                            "class" => "btn overlayDeleteJob",
                                            "escape" => false,
                                            "title" => __("Delete Job")
                                        )); ?>
                                </li>
  </ul>                       
    </div>  
    </div>                        
                        <?php
                        echo "<div style='clear:both; padding-top: 0px;'></div>"; ?>
                        <!-- Date Entred -->
                                                        <div class="form-group row">
                                                                <label for="date_birth" class="col-sm-3 col-form-label"><?php echo  __('Date Entred') ; ?></label>
                                                            <div class="col-sm-4 col-lg-4">
                                                                <input class="form-control" name="date_entred" type="date" placeholder="dd/mm/yyyy"  />
                                                            </div>
                                                            </div>  
                                                            <!-- Date Out -->
                                                        <div class="form-group row">
                                                                <label for="date_out" class="col-sm-3 col-form-label"><?php echo  __('Date Out') ; ?></label>
                                                            <div class="col-sm-4 col-lg-4">
                                                                <input class="form-control" name="date_out" type="date" placeholder="dd/mm/yyyy"  />
                                                            </div>
                                                            </div>                                                        
                                                         <!-- ccp_number -->
                                                        <div class="form-group row">    
                                                                <label for="ccp_number" class="col-sm-3 col-form-label"><?php echo  __('CCP number') ; ?></label>
                                                      
                                                            <div class="col-sm-8 col-lg-8">
                                                                <?php 
                                                                 echo $this->Form->input('ccp_number',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- ss_number -->
                                                        <div class="form-group row">
                                                                <label for="ss_number" class="col-sm-3 col-form-label"><?php echo  __('SS number') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('ss_number',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>                
    <?php echo "<div style='clear:both; padding-top: 0px;'></div>"; ?>       
    </div>
    <div class="col-sm-3">
  </div>
</div>             
         </div>  <!--fin Tab AdminInfo-->
 <!--Tab Degree/experienece-->
         <div class="tab-pane" id="Degree">
          <div class="row">
     <div class="col-sm-9">
      <br>
                                    <!-- school_level_id -->
                                                     <div class="form-group row">
                                                    <label for="service" class="col-sm-3 col-form-label"><?php echo  __('School level') ; ?></label> 
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
           <table class="" id="dynamic_degree">
          <tr>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Degree') ; ?></label></th>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Date Degree') ; ?></label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Place') ; ?></label></th>
            <td><a href="#"  id="adddegre" class="btn btn-primary" > Add Degree  </a></td></tr>       
          </table>

          <table class="" id="dynamic_field">
          <tr>
           <th> <label class="col-sm-3 col-form-label"><?php echo  __('Experience') ; ?></label></th>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Date start') ; ?></label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Date end') ; ?></label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Place') ; ?></label></th>
            <td><a href="#"  id="add" class="btn btn-primary" > Add Experience  </a></td></tr>       
          </table> 
          </div>
        <div class="col-sm-3">
  </div>

      </div>
          </div>
 <!--fin Tab Degree/experience-->
           <!--Tab Qualification/langue-->
         <div class="tab-pane" id="qualif">
          <div class="row">
     <div class="col-sm-9">
          <br>
          <?php
            echo $this->Form->control('qualifications.0.qualification');
            echo $this->Form->control('qualifications.0.date_quali', ['empty' => true]);
            echo $this->Form->control('qualifications.0.place_quali');
        ?>
        </div>
        <div class="col-sm-3">
  </div>

      </div>        
          </div>
 <!--fin Tab Qualiification/langue-->
  <!--Tab family-->
         <div class="tab-pane" id="fami">
          <div class="row">
     <div class="col-sm-6">
      <br>
<!-- first_name_join -->
                                                        <div class="form-group row">
                                                                <label for="first_name_join" class="col-sm-3 col-form-label"><?php echo  __('First name ') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.first_name_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                        <!-- laste_name_join-->
                                                        <div class="form-group row">
                                                                <label for="laste_name_join" class="col-sm-3 col-form-label"><?php echo  __('Last name') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.laste_name_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                         <!-- date_birth_join-->
                                                         <div class="form-group row">
                                                                <label for="date_birth_join" class="col-sm-3 col-form-label"><?php echo  __('Date of birth') ; ?></label>
                                                            <div class="col-sm-4 col-lg-4">
                                                                <input class="form-control" name="joints.0.date_birth_join" type="date" placeholder="dd/mm/yyyy"  />
                                                            </div>
                                                            </div>
           
                                                         <!--place_birth_join-->
                                                        <div class="form-group row">
                                                                <label for="laste_name_join" class="col-sm-3 col-form-label"><?php echo  __('Place birth') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.place_birth_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>                
                                        
        </div>
        <div class="col-sm-6"> 
          <br>
         <!-- sex_join-->
                                                        <div class="form-group row">
                                                                <label for="sex_join" class="col-sm-3 col-form-label"><?php echo  __('Gender') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.sex_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
                                                          <!-- nationality_join-->
                                                        <div class="form-group row">
                                                                <label for="nationality_join" class="col-sm-3 col-form-label"><?php echo  __('Nationality') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.nationality_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
          <!--phone_number_join-->
                                                        <div class="form-group row">
                                                                <label for="phone_number_join" class="col-sm-3 col-form-label"><?php echo  __('Phone') ; ?></label>
                                                            <div class="col-sm-8 col-lg-8">
                                                               <?php 
                                                                 echo $this->Form->input('joints.0.phone_number_join',array('class'=>'form-control','label'=>false)); ?>
                                                            </div>
                                                        </div>
  </div>

      </div>
      <br>
            <table class="" id="dynamic_field_child">
            <tr>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('First name') ; ?>    </label></th>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Date of Birth') ; ?> </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Presumed') ; ?>       </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Gender') ; ?>         </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Level Studies') ; ?>  </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Alived') ; ?>         </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Educated') ; ?>       </label></th>    
            <td><a href="#"  id="addchild" class="btn btn-primary" > +                       </a></td></tr>       
          </table> 
          </div>
 <!--fin Tab family-->
 <!--Tab Document-->
         <div class="tab-pane" id="docum">
          <div class="row">
     <div class="col-sm-9">
           <br>
           <?php
           echo $this->Form->control('employees_documents.0.document_type_id');
            echo $this->Form->control('employees_documents.0.date_eta', ['empty' => true]);
            echo $this->Form->control('employees_documents.0.date_exp', ['empty' => true]);
   
                                                                echo $this->Form->input('employees_documents.0.image',[ 
                                                               'label'=>false,
                                                              'class'=>'form-control',
                                                               'type' => 'file',
                                                               'placeholder'=>__('Enter a picture...')
                                                                  ]);
                                                                   
        ?>
            <table class="" id="dynamic_field_doc">
            <tr>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Document Type') ; ?>    </label></th>
            <th> <label class="col-sm-3 col-form-label"><?php echo  __('Date et') ; ?> </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Date Exp') ; ?>       </label></th>
            <th><label class="col-sm-3 col-form-label"><?php echo  __('Image') ; ?>         </label></th>    
            <td><a href="#"  id="adddoc" class="btn btn-primary" > +                       </a></td></tr>       
          </table> 
        </div>
        <div class="col-sm-3">
  </div>
      </div>        
      </div>
 <!--fin Tab document-->
    </div>
    </div><!--/col-9--> 
    </div>
<!-- save -->  
                          <div class="card-block">             
                          <div class="pull-right">
                          <?= $this->Form->button(__('Submit'),['class' =>'btn btn-primary m-b-0']) ?>
                      </div>
                    </div>
                        </div>

                    </div>
 <?= $this->Form->end() ?>
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
  var html='<tr id="row'+i+'"><td><input type="text" class="form-control" name="experiences['+i+'][experience]" maxlength="250" ></td>' ;  

    html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="experiences['+i+'][date_exp_start]" id="experiences-'+i+'-date-exp-start"></td>' ;                
   html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="experiences['+i+'][date_exp_end]" id="experiences-'+i+'-date-exp-end"></td>' ;  
   html=html+'<td><input type="text" class="form-control" name="experiences['+i+'][place_exp]" maxlength="250" ></td>' ; 
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
$(document).ready(function(e) {
   var j=1 ;
   //add row to table
   $("#adddegre").click(function(e) { 
  var html='<tr id="rowdeg'+j+'"><td><select name="employees_deplomes['+j+'][deplome_id]" id="deplome-id" class="form-control"><?php
        foreach ($deplomes as $key => $value) {
            echo '<option value="'.$key.'" >'.$value.'</option>' ;} ;?></select></td>' ;
    html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="employees_deplomes['+j+'][date_deplome]" id="employees_deplomes-'+j+'-date-deplome"></td>' ; 
    html=html+'<td><input type="text"  class="form-control" name="employees_deplomes['+j+'][place_deplome]" id="employees_deplomes-'+j+'-place-deplome"></td>' ; 
   html=html+'<td><button name="remove"  class="btn btn-danger btn-remove-degree"  id="'+j+'"> X </button></td></tr>' ;
  $("#dynamic_degree").append(html) ;
      j++ ; 
   }) ;
   //Remove row from table
     $(document).on('click' ,'.btn-remove-degree' , function(e){
      var Button_id=$(this).attr("id") ;
      $("#rowdeg"+Button_id+"").remove();
      j-- ;
     }) ;

});
</script>
<script>
$(document).ready(function(e) {
   var c=1 ;
   //add row to table
   $("#addchild").click(function(e) { 
  var  html=html+'<tr id="row'+c+'"><td><input type="text"   class="form-control" name="childs['+c+'][laste_name_child]" ></td>' ;   
       html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="childs['+c+'][date_birth_child]" class="datepicker" id="childs-'+c+'-date_birth_child"></td>' ;
       html=html+'<td><input type="text" class="form-control" name="childs['+c+'][presume_child]" maxlength="250" ></td>' ;
       html=html+'<td><input type="text" class="form-control" name="childs['+c+'][sex_child]" maxlength="250" ></td>' ;
       html=html+'<td><input type="text" class="form-control" name="childs['+c+'][level_stude_id]" maxlength="250" ></td>' ;  
       html=html+'<td><input type="text" class="form-control" name="childs['+c+'][alive_child]" maxlength="250" ></td>' ;
       html=html+'<td><input type="text" class="form-control" name="childs['+c+'][educated]" maxlength="250" ></td>' ;
       html=html+'<td><button name="remove"  class="btn btn-danger btn-remove"  id="'+c+'"> X </button></td></tr>' ;
  $("#dynamic_field_child").append(html) ;
      c++ ;
   }) ;
   //Remove row from table
     $(document).on('click' ,'.btn-remove' , function(e){
      var Button_id=$(this).attr("id") ;
      $("#row"+Button_id+"").remove();
      c-- ;
     }) ;

});
</script>

<script>
$(document).ready(function(e) {
   var k=1 ;
   //add row to table
   $("#adddoc").click(function(e) { 
  var html='<tr id="rowdoc'+k+'"><td><select name="emp_documents['+k+'][document_type_id]" id="document-type-id" class="form-control"><?php
        foreach ($documentTypes as $key => $value) {
            echo '<option value="'.$key.'" >'.$value.'</option>' ;} ;?></select></td>' ;

    html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="emp_documents['+k+'][date_deplome]" id="eemp_documents-'+k+'-date-et"></td>' ; 

    html=html+'<td><input type="date" placeholder="dd/mm/yyyy"  class="form-control" name="emp_documents['+k+'][date_deplome]" id="emp_documents-'+k+'-date-exp"></td>' ; 
    
    

     html=html+'<td><input type="file" name="emp_documents['+k+'][image]" class="form-control" placeholder="Enter a picture..." ></td>' ; 





   html=html+'<td><button name="remove"  class="btn btn-danger btn-remove-degree"  id="'+k+'"> X </button></td></tr>' ;
  
  $("#dynamic_field_doc").append(html) ;
      k++ ; 
   }) ;
   //Remove row from table
     $(document).on('click' ,'.btn-remove-degree' , function(e){
      var Button_id=$(this).attr("id") ;
      $("#rowdoc"+Button_id+"").remove();
      k-- ;
     }) ;

});
</script>













             