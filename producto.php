<?php
include('viewfunctions.php'); 
include('elementsfunctions.php');
?>

<!DOCTYPE html>
<html lang="en">
<!--
**********************************************************************************************************
    Copyright (c) 2014 Himanshu Softtech.
********************************************************************************************************** -->

<?php
showHead();
?>

<body>
<!--Pre loader start-->
<div id="preloader">
  <div id="status"><img src="images/loader.gif" id="preloader_image" width="36" height="36" alt="loading image"/></div>
</div>
<!--pre loader end--> 
<!--Color picker-->
<?php showColorPicker();?>
<!--Fin Color picker-->
<!--header start-->
<?php showWebHeader(); ?>
<!--header end--> 
<!--slider start-->

  <!--Aqui se llamabafuncion bodyslider-->

<!--slider end-->

<div class="container"> 

  <div class="hs_margin_40"></div>

  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2">
      <img width="228" height="252" src="http://placehold.it/228x254" alt="">
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1" style="margin:0;"></div>

    <div class="col-lg-8 col-md-8 col-sm-8" style="margin:0;">
      <h4 class="hs_heading" id="hs_meat_doc"><dd>Nombre producto</dd> $X.XX</h4>
      <p><b>Descripci&oacute;n</b>
      <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      <button type="button" class="btn btn-default btn-lg">Comprar</button>
    </div>
  </div>
  
  <div class="clearfix"></div>
  <div class="hs_margin_40"></div>
  <div class="clearfix"></div>
</div>

<!--footer-->
<!-- < ? p h p showFooterLinks(); ?>-->
<!-- < ? p h p showWebFooter(); ?> -->
<!--footer end-->



<!--Js's-->
<?php showFinalJs(); ?>
<!--Fin Js's-->
</body>
</html>
