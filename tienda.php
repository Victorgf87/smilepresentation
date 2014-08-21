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
<!--< ? p h p showColorPicker();?>-->
<!--Fin Color picker-->
<!--header start-->
<?php showWebHeader(); ?>
<!--header end--> 
<!--slider start-->

  <!--Aqui se llamabafuncion bodyslider-->

<!--slider end-->

<div class="container"> 

  <div class="hs_margin_40"></div>

  <?php showStore(); ?>
  
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
