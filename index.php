<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DPS 207 FIP </title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
<link href="css/master.css" rel="stylesheet">
<link href="css/color2.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/iview/css/iview.css" type='text/css' media='all' />
<link rel="stylesheet" href="plugins/iview/css/skin/style.css" type='text/css' media='all' />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src= "js/jquery-migrate-1.2.1.js" ></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>

<body>
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

<?php include('include/navbar.php'); ?>
<?php include('include/header.php'); ?>
  
  <div id="iview">
    <div data-iview:thumbnail="media/slider/1.jpg" data-iview:image="media/slider/1.jpg" data-iview:transition="block-drop-random" >
      <div class="container">
        <div class="iview-caption  bg-no-caption" data-x="220" data-y="240" data-transition="expandLeft">
          <div class="custom-caption">
            <h3>YOUR DREAM CONSTRUCTION<br>
              COMPANY</h3>
            <p>EVivamus elementum laoreet lorem. Maecenas erat felis sed mollis<br>
              semper lobortis vitae phasellus commodo libero</p>
            <div class="text-right"> <a href="#tabs-section"  class="btn btn-primary btn-lg">LEARN MORE </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="charstart" class="no-bg-color-parallax parallax-yellow  home-section no-margin animated " data-animation="fadeInUp">
    <ul class="bg-slideshow">
      <li>
        <div style="background-image:url(media/bg/1.jpg)" class="bg-slide"></div>
      </li>
      <li>
        <div style="background-image:url(media/bg/2.jpg)" class="bg-slide"></div>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
          <script src="plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="featured-item-simple-icon animated text-center"  data-animation="fadeInUp">
              <div class="ft-icons-simple"><i class="fa flaticon-building104"></i> </div>
              <div class="ft-content"> <span class="chart" data-percent="8960"> <span class="percent"></span> </span>
                <h6>PROJECTS DONE</h6>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="featured-item-simple-icon animated text-center"  data-animation="fadeInUp">
              <div class="ft-icons-simple"><i class="fa flaticon-architecture1"></i> </div>
              <div class="ft-content"> <span class="chart" data-percent="230"> <span class="percent"></span> </span>
                <h6>MACHINERIES</h6>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="featured-item-simple-icon animated text-center"  data-animation="fadeInUp">
              <div class="ft-icons-simple"><i class="fa flaticon-construction11"></i> </div>
              <div class="ft-content"> <span class="chart" data-percent="60"> <span class="percent"></span> </span>
                <h6>CLIENT SERVICES</h6>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="featured-item-simple-icon animated text-center"  data-animation="fadeInUp">
              <div class="ft-icons-simple"><i class="fa flaticon-constructor2"></i> </div>
              <div class="ft-content"> <span class="chart" data-percent="2560"> <span class="percent"></span> </span>
                <h6>QUALIFIED STAFF</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('include/footer.php'); ?>
  
</div>
<a class="scroll-top "> <i class="fa fa-angle-up"> </i></a> 

<!--HOME SLIDER--> 
<script src="plugins/iview/js/iview.js"></script> 

<!-- SCRIPTS --> 
<script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="plugins/bxslider/jquery.bxslider.min.js"></script> 
<script src="plugins/magnific/jquery.magnific-popup.js"></script> 
<script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="js/classie.js"></script> 
<!--THEME--> 
<script src="js/cssua.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
