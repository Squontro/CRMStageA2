<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New Compagnie</h5>
                            </div>
                            <div class="card-block">
                                 <?= $this->Form->create($compagne); ?>
                        <!-- name -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name *</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('name',array('class'=>'required form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- adress_comp -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('adress_comp',array('class'=>'form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- phone_number -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('phone_number',array('class'=>'form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- email_comp -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('email_comp',array('class'=>'form-control','type'=>'email','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- facebook -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('facebook',array('class'=>'form-control','label'=>false)); ?>
                            </div>
                            </div>
                            <!-- site_web -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Site Web</label>
                                        <div class="col-sm-6">
                            <?php 
                            echo $this->Form->input('site_web',array('class'=>'form-control','label'=>false)); ?>
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
