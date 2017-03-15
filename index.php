<html>
<head>
<title>Health care</title>
	


<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body> 

<header>

<ul id="dropdown1" class="dropdown-content">
  <li><a href="login_doctor.php">DOCTOR</a></li>
  <li><a href="login_patient.php">PATIENT</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="register_doctor.php">DOCTOR</a></li>
  <li><a href="register_patient.php">PATIENT</a></li>
</ul>
	<nav class=" blue lighten-2">
	<div class="container">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo active">Home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
		<li><a class="dropdown-button" href="#!" data-activates="dropdown2">REGISTER<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">LOGIN<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="contact_us.php">CONTACT US</a></li>
      </ul>
    </div>
	</div>
  </nav>

  </header>

    <div class ="slider">
    <ul class="slides">
      <li>
          <img src="img/images.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
          <img src="img/images4.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
          <img src="img/images2.png"> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
          <img src="img/images3.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5</h5>
        </div>
      </li>
    </ul>
  </div>
      


    <footer class="page-footer" style="background-color: #64b5f6">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">MEDICAL HEALTH CARE</h5>
                <p class="grey-text text-lighten-4">Community health centers do a great deal with limited resources. They provide critical medical care services to many who would otherwise have no other place to go or would end up in an emergency room. </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"></h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright 
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>
 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
	 $(document).ready(function(){
      $('.parallax').parallax();
    });
	  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
  
  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
	</script>
</body>

</html>