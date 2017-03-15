<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_dcotor.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Doctor Appointment</title>
        <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css1/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css1/themes/default-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css1/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css1/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css1/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="style1.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
    
    </head>
    
    
    <body>
       
      
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header" >
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav style="background-color: #64b5f6" class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
                <a class="navbar-text" style="font-size: 28px; color: white">WELCOME <?php echo $_SESSION['username']; ?></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                  <li><a href="main_services_patient.php">SERVICES</a></li>
                  <li><a href="contact_us.php">CONTACT US</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   

        <?php
        // put your code here
        ?>
          <!-- Start Single Top Feature -->
          <div class="single-top-feature" style="background-color: #bbdefb">
              <span class="fa fa-hospital-o"></span>
              <h3>Appointment</h3>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appointment"><span>Appointment</span></a>    
              </div>
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Appointment Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                          <form class="appointment-form" method="post" action="view_app.php">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your name <span class="required">*</span>
                              </label>
                                <input type="text" class="wp-form-control wpcf7-text" name="name" placeholder="Your name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Email <span class="required">*</span>
                              </label>
                                <input type="email" class="wp-form-control wpcf7-email" name="email" placeholder="Email address">  
                            </div>
                          </div>
                          <div class="row">                
                              <div class="col-md-6 col-sm-6">
                              <label class="control-label">Time Slot <span class="required">*</span>
                              </label>
                                  <select class="wp-form-control wpcf7-select" name="Time">
                                <option val="1">9 am-11 am</option>
                                <option val="2">1 pm-3 pm</option>
                                <option val="3">4 pm-6 pm</option>
                                <option val="4">8 pm-10 pm</option>
                              </select> 
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Phone <span class="required">*</span>
                              </label>
                                <input type="number" name="phone" class="wp-form-control wpcf7-text" placeholder="Phone No">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Appointment Date <span class="required">*</span>
                              </label>
                                <input type="date" name="appdate" class="datapicker">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Select Department <span class="required">*</span>
                              </label>
                              <select class="wp-form-control wpcf7-select" name="dept">
                                <option val="1">Dental</option>
                                <option val="2">cardiology</option>
                                <option val="3">neurology</option>
                                <option val="4">Drugstore</option>
                                <option val="5">x-ray</option>
                                <option val="6">birth</option>
                                <option val="7">general</option>
                                <option val="8">testing</option>
                                <option val="9">first-aid</option>
                                <option val="10">immunizations</option><option val="11">pulmonary</option>
                              </select> 
                            </div>
                          </div>         
                              <input type="text" name="subj" class="wp-form-control wpcf7-text" placeholder="Subject">
                          <button class="wpcf7-submit button--itzel" name="submit" value="submit" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>  
                        </form>
                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
        </div>
        <!-- jQuery Library  -->
        <script src="js1/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js1/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js1/waypoints.min.js"></script>
    <script src="js1/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js1/snap.svg-min.js"></script>
    <script src="js1/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='js1/photoswipe.min.js'></script>
    <script src='js1/photoswipe-ui-default.min.js'></script>    
    <script src="js1/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="js1/custom.js"></script>
    <script type="text/javascript">
        $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        </script>
        
  <img class="single-top-feature" style="background-color: #bbdefb" src="img/images3.jpg"/ width=80% >
    </body>
</html>
