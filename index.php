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

  <div class="row">
    <div class="divgris">Banner Header / Slogan / Imagen de la chica del Packaging</div>
  </div>
  <div class="hs_margin_40"></div>


  <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-5" style="margin:0;">
      <div class="divgris">
        <b>Negocios</b>
        <p>Imagen de negocio 
            aplicando el producto 
            con toodo el set.</p>
      </div>

    </div>

    <div class="col-lg-2 col-md-2 col-sm-2" style="margin:0;"></div>

    <div class="col-lg-5 col-md-5 col-sm-5" style="margin:0;">
      <div class="divgris">
        <b>Domésticos</b>
        <p>Imagen en una casa 
            aplicando el producto 
            en ambiente doméstico, 
            sofá, TV etc...</p>
      </div>
    </div>
  </div>
  <div class="hs_margin_40"></div>
  <div class="row">
    <div class="divgris">Descripción general del producto y sus principales ventajas. </div>
  </div>


  <div class="clearfix"></div>
  <div class="hs_margin_40"></div>
  <div class="clearfix"></div>
</div>

<!--footer-->
<?php showFooterLinks(); ?>
<!-- < ? p h p showWebFooter(); ?> -->
<!--footer end-->



<!--Js's-->
<?php showFinalJs(); ?>
<!--Fin Js's-->
</body>
</html>
