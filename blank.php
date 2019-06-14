<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DPS 207 FIP </title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
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
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">
  
<?php include('include/navbar.php'); ?>
<?php include('include/header.php'); ?>
  
  <main class="main-content" >
    <div class="container">
        <h2>Título del proyecto</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
          <aside class="sidebar animated " data-animation="fadeInLeft" > 
            
            <!-- ARCHIVE WIDGET -->
            
            <div class="widget widget-category cms-category-list">
              <div class="block_content">
                <ul class="category-list unstyled clearfix">
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>0. GUIAS Y MANUALES</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>1. CONTRATO</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>2. ESTUDIOS Y DISEÑOS</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>3. CONVENIO</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>4. CORRESPONDENCIA</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>5. CONSTRUCCION</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>6. HSEQ</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>7. RECIBO FINAL</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>8. INFORMES</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>9. COMITES</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>10. DOCYREGISTROS</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>12. REVISIONES</a></li>
                  <li><a href="#"><i class="fa fa-long-arrow-right"></i>12. VARIOS</a></li>
                </ul>
              </div>
            </div>
            
            <!-- ARCHIVE WIDGET -->
            
            
            <!-- SEARCH WIDGET --> 
            
          </aside>
        </div>
        <div class="col-md-9">
          <form novalidate id="contactForm" class="contactForm2" data-animation="bounceInUp" name="sentMessage animated">
              <h4>Datos para la generacion de estadisticas</h4>
              <div class="row">
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" data-validation-required-message="Please enter your name." required id="name" placeholder="Your Name *" class="form-control">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                                        <input type="email" data-validation-required-message="Please enter" required  id="email" name="email"  placeholder="Email Address" class="form-control">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="tel" data-validation-required-message="Please enter your phone number." required id="phone" placeholder="Your Phone *" class="form-control">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p class="help-block text-danger"></p>
                      <div id="success"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group form-group-text">
                    <textarea data-validation-required-message="Please enter a message." required id="message" placeholder="Your Message *" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <input type="file" data-validation-required-message="Please enter your phone number." required id="phone" class="form-control">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                <div class="col-md-7">
                  <div class="form-group text-right">
                    <button class="btn btn-primary ">Enviar Archivo </button>
                  </div>
                </div>
              </div>
            </form>
        </div>

      </div>
    </div>
  </main>

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
