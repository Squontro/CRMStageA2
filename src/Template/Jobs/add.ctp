<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New Job</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                 <?= $this->Form->create($job); ?>
                                   <!-- job_type_id -->
                                                   <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Job Type</label>
                                                          <div class="col-sm-6" id="JobType-div">
                                                          <?php
                                                               echo $this->Form->select('job_type_id',$jobTypes , [
                                                                'label' => false ,
                                                                'empty' => '--Select Type--- ',
                                                                'class' =>'js-example-basic-single']) ;?>
                                                            </div>
                                                                
                        <div class="btn-group quick-actions">
                            <div id="dialogModalJobType">
                                <!-- the external content is loaded inside this tag -->
                            <div id="contentWrapJobType"></div>
                            </div>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true">
                             </i>
                            </button>
                               <ul class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-add m-r-5"></i>' . __('Add', true),
                                        array("controller" => "JobTypes", "action" => "addJobType"),
                                        array(
                                            "class" => "btn overlayJobType",
                                            "escape" => false,
                                            "title" => __("Add Job Type")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-edit m-r-5"></i>' . __('Edit', true),
                                        array("controller" => "JobTypes", "action" => "EditJobType"),
                                        array(
                                            "class" => "btn overlayEditJobType",
                                            "escape" => false,
                                            "title" => __("Edit Job Type")
                                        )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<i class="icofont icofont-ui-delete m-r-5"></i>' . __('Delete', true),
                                        array("controller" => "JobTypes", "action" => "DeleteJobType"),
                                        array(
                                            "class" => "btn overlayDeleteJobType",
                                            "escape" => false,
                                            "title" => __("Delete Job Type")
                                        )); ?>
                                </li>
  </ul>                       
    </div>  
    </div>                        
                        <?php
                        echo "<div style='clear:both; padding-top: 10px;'></div>"; ?>
                        <!-- job_title -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('name',array('class'=>'required form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- max_salar -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Max salary</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('max_salar',array('class'=>'required form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- min_salar -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Min salary</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('min_salar',array('class'=>'required form-control','label'=>false)); ?>
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