<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New Language</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                 <?= $this->Form->create($language); ?>
                        <!-- lang -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Language*</label>
                                <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('lang',array('class'=>'required form-control','type'=>'text' ,'label'=>false)); ?>
                            </div>
                            </div>
                            <!-- abr_lang -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Abréviation language*</label>
                                <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('abr_lang',array('class'=>'required form-control','type'=>'text' ,'label'=>false)); ?>
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


