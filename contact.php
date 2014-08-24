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
<h4 class="hs_heading" id="hs_appointment_form_link">Contacto</h4>
  <div class="hs_appointment_form_div"> <img width="512" height="387" alt="">
        <div class="hs_appointment_form">
          <form>
            <div class="row">
              <div class="col-lg-6 col-md-7 col-sm-6">
                
                <div class="form-group">
                  <input type="text" class="form-control" id="slider_fname" name="fname" placeholder="Nombre" required="">
                </div>
                <div class="form-group">
                  <input type="text" id="slider_phone" name="phone" class="form-control" placeholder="E-Mail" required="">
                </div>
                <div class="form-group">
                  <input type="email" id="slider_email" name="email" class="form-control" placeholder="Asunto" required="">
                </div>
                <div class="form-group">
                  <input type="text" id="slider_date" name="date" class="form-control" placeholder="Mensaje" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-3">
                <button type="button" id="slider_book_apo" class="btn btn-default">Enviar</button>
              </div>
            </div>
            
          </form>
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
