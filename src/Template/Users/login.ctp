



<div class="container-fluid">
  <div class="row">
    <?= $this->Flash->render() ?>
    <div class="col-sm-12">
      <!-- Authentication card start -->
      <div class="login-card card-block auth-body">            
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
        <div class="text-center">
          <img src="../images/auth/logo.png" alt="logo.png">
        </div>
        <div class="auth-box">
          <div class="row m-b-20">
            <div class="col-md-12">
              <h3 class="text-left txt-primary">Sign In</h3>
            </div>
          </div>
          <hr/>
          <div class="input-group">
            <input type="email" class="form-control" name="emailaddress" placeholder="Your Email Address">
            <span class="md-line"></span>
          </div>
          <div class="input-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="md-line"></span>
          </div>
          <div class="row m-t-30">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
            </div>
          </div>
          <hr/>
          <div class="row">
            <div class="col-md-10">
              <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
              <p class="text-inverse text-left"><b>Your Autentification Team</b></p>
            </div>
            <div class="col-md-2">
              <img src="../images/auth/Logo-small-bottom.png" alt="small-logo.png">
            </div>
          </div>

        </div>
        <!-- end of form -->
      </div>
      <!-- Authentication card end -->
    </div>
    <!-- end of col-sm-12 -->
  </div>
  <!-- end of row -->
</div>
