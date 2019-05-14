<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New School Level</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                 <?= $this->Form->create($schoolLevel); ?>
                                   <!-- level_stude_id -->
                                                   <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Level Stude</label>
                                                          <div class="col-sm-6" id="LevelStude-div">
                                                          <?php
                                                               echo $this->Form->select('$level_stude_id',$levelStudes , [
                                                                'label' => false ,
                                                                'empty' => '--Select Level Studes--- ',
                                                                'class' =>'js-example-basic-single']) ;?>
                                                            </div>
                                                                
                        <div class="btn-group quick-actions">
                            <div id="dialogModalLevelStudes">
                                <!-- the external content is loaded inside this tag -->
                            <div id="contentWrapLevelStudes"></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                             </i>
                            </button>
                               <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "LevelStudes", "action" => "addLevelStude"),
                                        array(
                                            "class" => "btn overlayLevelStude",
                                            "escape" => false,
                                            "title" => __("Add Level Studes")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "LevelStudes", "action" => "EditLevelStude"),
                                        array(
                                            "class" => "btn overlayEditLevelStude",
                                            "escape" => false,
                                            "title" => __("Edit Level Stude")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "Services", "action" => "DeleteCompagne"),
                                        array(
                                            "class" => "btn overlayDeleteLevelStude",
                                            "escape" => false,
                                            "title" => __("Delete Level Stude")
                                        )); ?>
                                </li>
  </ul>                       
    </div>  
    </div>                        
                        <?php
                        echo "<div style='clear:both; padding-top: 10px;'></div>"; ?>
                        <!-- school_level -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('name',array('class'=>'required form-control','label'=>false)); ?>
                            </div>
                            </div>
                              <!-- save -->       
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->button(__('Submit'),['class' =>'btn btn-primary m-b-0']) ?>
                                            
                                        </div>
                                    </div>
                            <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Inputs Validation end -->