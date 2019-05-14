<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- Favicon icon -->
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Required Fremwork -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <!-- themify icon -->
    <?=  $this->Html->css('assets/icon/themify-icons/themify-icons') ?>
    <!-- ico font -->
    <?=  $this->Html->css('assets/icon/icofont/css/icofont') ?>
    <!-- Style.css -->
    <?=  $this->Html->css('assets/css/style') ?>
    <!--color css-->
    <?=  $this->Html->css('assets/css/color/color-1') ?>
  </head>
  <body>
    <body class="fix-menu">
      <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <?= $this->fetch('content') ?>
      </section>

      <!-- Required Jqurey -->
      <?=  $this->Html->script('jquery.min')  ?> 
      <?=  $this->Html->script('jquery-ui.min')  ?> 
      <?=  $this->Html->script('tether.min')  ?> 
      <?=  $this->Html->script('bootstrap.min')  ?> 
      <?=  $this->Html->script('assets/pages/dashboard/custom-dashboard')  ?>
      <?=  $this->Html->script('assets/js/script')  ?>

      <!---- color js --->
      <?=  $this->Html->script('assets/js/common-pages')  ?>


    </body>







    </html>