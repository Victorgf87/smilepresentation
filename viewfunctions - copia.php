<?php

function showHead()
{?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Care, health" />
<meta name="description" content="Health Care HTML Template" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- favicon links -->
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="icon" type="image/ico" href="favicon.ico" />
<!--Google web fonts-->
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- main css -->
<link rel="stylesheet" href="css/main.css" media="screen"/>
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>

<!--page title-->
<title>Health Care HTML Template</title>
</head>	
<?php
}



function showWebHeader()
{?>

<header id="hs_header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        <div class="col-lg-2 col-md-2 col-sm-12">
          <div id="hs_logo" > <a href="index.html"> <img src="images/logo.png" alt=""> </a> </div>
          <!-- #logo --> 
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <button type="button" class="hs_nav_toggle navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu<i class="fa fa-bars"></i></button>
          <nav>
            <ul class="hs_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <li><a class="active">HOME</a>
                <ul>
                  <li><a href="index1.html">home 1</a></li>
                </ul>
              </li>
              <li><a href="about.html">about</a></li>
              <li><a>services</a>
                <ul>
                  <li><a href="services.html">Pediatric Clinic</a></li>
                  <li><a href="services.html">Dental Clinic</a></li>
                  <li><a href="services.html">General Surgery</a></li>
                  <li><a href="services.html">Physiotherapy</a></li>
                  <li><a href="services.html">Pregnancy Care</a></li>
                </ul>
              </li>
              <li><a>pages</a>
                <ul>
                  <li><a>Blog</a>
                    <ul>
                      <li><a href="blog-categories.html">Blog Categories</a></li>
                      <li><a href="blog-single-post.html">Blog Single Post</a></li>
                      <li><a href="blog-single-post-leftsidebar.html">Blog Leftsidebar</a></li>
                      <li><a href="blog-single-post-rightsidebar.html">Blog Rightsidebar</a></li>
                    </ul>
                  </li>
                  <li><a>services</a>
                    <ul>
                      <li><a href="services-two-column.html">services Two Column</a></li>
                      <li><a href="services.html">services Three Column</a></li>
                      <li><a href="services-four-column.html">services Four Column</a></li>
                    </ul>
                  </li>
                  <li><a>profile</a>
                    <ul>
                      <li><a href="profile-single.html">profile single</a></li>
                    </ul>
                  </li>
                  <li><a href="elements.html">Elements</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="columns.html">columns</a></li>
                  <li><a href="icon.html">icon</a></li>
                </ul>
              </li>
              <li><a href="profile.html">our profile</a></li>
              <li><a href="blog-categories.html">our blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4">
          <div class="hs_social">
            <ul>
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href="" id="hs_search"><i class="fa fa-search"></i></a></li>
            </ul>
          </div>
          <div class="hs_search_box">
            <form class="form-inline" role="form">
              <div class="form-group has-success has-feedback">
                <input type="text" class="form-control" id="inputSuccess4" placeholder="Search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span> </div>
            </form>
          </div>
          
          <!-- #logo --> 
        </div>
      </div>
      <!-- .col-md-12 --> 
    </div>
    <!-- .row --> 
  </div>
  <!-- .container --> 
  
</header>


<?php
}




function bodySlider()
{
?>


<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"> <img class="animated fadeInDown" src="http://placehold.it/1366x550" alt="...">
      <div class="carousel-caption">
        <h1 class="hs_slider_title animated bounceInDown">Meet Our Doctor’s Team.</h1>
        <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis rutrum in. 
          Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
        <a href="#hs_meat_doc" class="btn btn-default hs_slider_button animated fadeInLeftBig">More Info</a> <a href="" class="btn btn-success animated fadeInRightBig">Download</a> </div>
    </div>
    <div class="item"> <img class="animated fadeInDown" src="http://placehold.it/1366x550" alt="...">
      <div class="carousel-caption">
        <h1 class="hs_slider_title animated bounceInDown">Book your Appointment</h1>
        <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis rutrum in. 
          Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
        <a href="#hs_appointment_form_link" class="btn btn-default hs_slider_button animated fadeInLeftBig">More Info</a> <a href="" class="btn btn-success animated fadeInRightBig">Download</a> </div>
    </div>
  </div>
</div>

<!--layer slider ends--> 

<?php
}


function showWebFooter()
{?>


<footer id="hs_footer">
  <div class="container">
    <div class="hs_footer_content">
      <div class="row">
        <div class="col-lg-12">
          <div class="hs_footer_menu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="blog-categories.html">Blog</a></li>
              <li><a href="profile.html">Our profile</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="row">
            <div class="hs_footer_about_us">
              <div class="col-lg-3 col-md-4 col-sm-12 col-md-12 col-sm-12">
                <h4 class="hs_heading">About Us</h4>
                <a href="index.html"><img src="images/logo.png" alt="logo" width="180" height="41" /></a> </div>
              <div class="col-lg-9 col-md-8 col-sm-12 hs_about_us">
                <div class="hs_margin_60"></div>
                <p>Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate. </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12">
              <h4 class="hs_heading">Get in touch !</h4>
              <div class="hs_contact_detail">
                <p><i class="fa fa-map-marker"></i> 13/2 Elizabeth Street Melbourne VIC 3000, Australia</p>
                <p><i class="fa fa-mobile-phone"></i> +61 3 8376 6284</p>
                <div class="clearfix"></div>
                <div class="hs_social">
                  <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
              <h4 class="hs_heading">Useful Links</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="services.html">Pediatric Clinic</a></li>
                  <li><a href="services.html">Dental Clinic</a></li>
                  <li><a href="services.html">General Surgery</a></li>
                  <li><a href="services.html">Physiotherapy</a></li>
                  <li><a href="services.html">Ltricies lputate</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="blog-categories.html">Blog Categories</a></li>
                  <li><a href="services-two-column.html">services Two Column</a></li>
                  <li><a href="blog-single-post.html">Blog Single Post</a></li>
                  <li><a href="services.html">services Three Column</a></li>
                  <li><a href="blog-single-post-leftsidebar.html">Blog Leftsidebar</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="blog-single-post-rightsidebar.html">Blog Rightsidebar</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="elements.html">Elements</a></li>
                  <li><a href="columns.html">columns</a></li>
                  <li><a href="icon.html">icon</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <h4 class="hs_heading">Twitter Widget</h4>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 hs_twitter_widget">
              <ul>
                <li> <i class="fa fa-twitter"></i> <a href="">
                  <p>@healthcare...  Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus,  eleifend semper. <br>
                    <br>
                    <strong>17 hours ago</strong> </p>
                  </a> </li>
                <li> <i class="fa fa-twitter"></i> <a href="">
                  <p>@Hsoftindia...  Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus,  eleifend semper. <br>
                    <br>
                    <strong>2 min ago</strong> </p>
                  </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php
}

function showFinalJs()
{
  ?>
  <!--main js file start--> 
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<!--<script type="text/javascript" src="js/selectnav.min.js"></script> --> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="js/jquery.layerslider.js"></script> 
<script type="text/javascript" src="js/jquery.theme.plugins.min.js"></script> 
<script>
$(document).ready(function($) {
if ( $( '#layerslider' ).length && jQuery() ) {
 $('#layerslider').layerSlider({
                  width : '100%',
                  height : '450px',
                   responsive : true,
                   responsiveUnder : 940,
                   sublayerContainer : 1020,
                    autoStart : true,
                     pauseOnHover : true,
                     firstLayer : 1,
                    animateFirstLayer : true,
                    randomSlideshow : false,
                     twoWaySlideshow : true,
                     loops : 0,
                     forceLoopNum : true,
                     autoPlayVideos : false,
                    autoPauseSlideshow : 'auto',
                    keybNav : true,
                    touchNav : true,
                    navButtons: false,
                    navStartStop: false,
                    skin : 'fullwidth',
                     skinsPath : 'images/slider/layer/skins/',

        });
}

//color picker for body background
    $('#picker').colpick({
      layout:'hex',
      submit:0,
      colorScheme:'dark',
      onChange:function(hsb,hex,rgb,el,bySetColor) {
        $(el).css('border-color','#'+hex);
        $('body').css('background-color','#'+hex);
        //$(el).css('background-color','#'+hex);
        // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
        if(!bySetColor) $(el).val(hex);
      }
      }).keyup(function(){
        $(this).colpickSetColor(this.value);
        });
});
</script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript" src="css/colorpicker/js/colpick.js"></script> 
<!--main js file end-->
  <?php
}



function showColorPicker()
{
  ?>
  <!-- color picker start -->
<div id="style-switcher" class="hs_color_set">
  <div>
    <h3>color options</h3>
    <ul class="colors">
      <li>
        <p class='colorchange' id='color'></p>
      </li>
      <li>
        <p class='colorchange' id='color2'></p>
      </li>
      <li>
        <p class='colorchange' id='color3'></p>
      </li>
      <li>
        <p class='colorchange' id='color4'></p>
      </li>
      <li>
        <p class='colorchange' id='color5'></p>
      </li>
      <li>
        <p class='colorchange' id='style'></p>
      </li>
    </ul>
    <h3>Body Backbround</h3>
    <input type="text" id="picker" placeholder="008363" />
    <p> </p>
  </div>
  <div class="bottom"> <a href="" class="settings"><i class="fa fa-gear"></i></a> </div>
</div>
<!-- color picker end --> 
  <?php
}


?>