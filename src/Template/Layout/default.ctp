
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <title>Gestion RH</title>
     <!-- JQuery -->
    <?=  $this->Html->script('jquery.min')  ?> 
    <?=  $this->Html->script('jquery-ui.min')  ?>
    <!-- Required Fremwork -->
    <?=  $this->Html->css('bootstrap'); ?>
    <!-- themify icon -->
    <?=  $this->Html->css('assets/icon/themify-icons/themify-icons') ?>
    <!-- ico font -->
    <?=  $this->Html->css('assets/icon/icofont/icofont') ?>
    <!-- flag icon framework css -->
    <?=  $this->Html->css('assets/pages/flag-icon/flag-icon.min') ?>
    <!-- Menu-Search css -->
    <?=  $this->Html->css('assets/pages/menu-search/css/component') ?>
    <!-- Horizontal-Timeline css -->
    <?=  $this->Html->css('assets/pages/dashboard/horizontal-timeline/css/style.css') ?>
    <!-- amchart css -->
    <?=  $this->Html->css('assets/pages/dashboard/amchart/css/amchart') ?>
    <!-- jpro forms css -->
    <?=  $this->Html->css('assets/pages/j-pro/css/demo.css') ?>
    <?=  $this->Html->css('assets/pages/j-pro/css/font-awesome.min.css') ?>
    <?=  $this->Html->css('assets/pages/j-pro/css/j-forms.css') ?>
    <!-- flag icon framework css -->
    <?=  $this->Html->css('assets/pages/flag-icon/flag-icon.min') ?>
    <!-- Menu-Search css -->
    <?=  $this->Html->css('assets/pages/menu-search/css/component') ?>    
    <!-- Select 2 css -->
    <?=  $this->Html->css('select2.min') ?>
    <!-- Date-time picker css -->
    <?=  $this->Html->css('assets/pages/advance-elements/css/bootstrap-datetimepicker') ?>
    <!-- Style.css -->
    <?=  $this->Html->css('assets/css/style') ?>
    <!-- Color css -->
    <?=  $this->Html->css('assets/css/color/color-1') ?>
    <?=  $this->Html->css('assets/css/linearicons') ?>
    <?=  $this->Html->css('assets/css/simple-line-icons') ?>
    <?=  $this->Html->css('assets/css/ionicons') ?>
    <!-- Grid css -->
    <?=  $this->Html->css('jsgrid.min') ?>
    <?=  $this->Html->css('jsgrid-theme.min') ?> 
   

  </head>
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
      <div class="ball-scale">
        <div></div>
      </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box">
      </div>  
      <?= $this->element('header') ?>
      <div class="pcoded-wrapper">
        <?= $this->element('navbar') ?>  
        <?= $this->element('content') ?>  
      </div>
    </div>
    <!-- Required Jquery -->
    <?=  $this->Html->script('tether.min')  ?> 
    <?=  $this->Html->script('bootstrap.min')  ?>
    <!-- Bootstrap date-time-picker js -->
    <?=  $this->Html->script('bootstrap-datepicker.min')  ?>
    <!-- Custom js -->
    <?=  $this->Html->script('assets/pages/dashboard/custom-dashboard')  ?>
    <?=  $this->Html->script('assets/js/script')  ?>
    <!-- Select 2 js -->
    <?=  $this->Html->script('select2.full.min')  ?>
    <?=  $this->Html->script('assets/pages/advance-elements/select2-custom')?>
    <!-- pcmenu js -->
    <?=  $this->Html->script('assets/js/pcoded.min') ?>
    <?=  $this->Html->script('assets/js/demo-12') ?>
    <?=  $this->Html->script('assets/js/jquery.mCustomScrollbar.concat.min')  ?>
    <?=  $this->Html->script('assets/js/jquery.mousewheel.min')  ?>
    <!--Employee JSgrid JS-->
    <?=  $this->Html->script('jsgride/jsgrid.min')  ?>
  </body>
</html>
