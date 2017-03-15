
<html>
    <head>
        <title>contact us</title>
        <link type="text/css" rel="stylesheet" href="contact.css"/>
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
	<nav class="blue lighten-2">
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
 
        <h1>CONTACT US</h1>
        <div class="lside">
        <div>
            <p>
                TP205, TECH PARK<br>
                SRM UNIVERSITY<br>
                SRM NAGAR<br>
                POTHERI<br>
                CHENNAI<br>
                TAMIL NADU<br>
                603203<br>
            </p>
            <p>
                Phone Number :- 7702745678
            </p>
        </div>
            <form method="post" action="new.php">
            *First Name(required):<br>
            <input type="text" name="fname" style="width: 300"><br>
            *Last Name(required):<br>
            <input type="text" name="lname" style="width: 300"><br>
            *Email address(required):<br>
            <input type="email" name="email" style="width: 300"><br>
            *Message :<br>
            <input type="text" name="mesg" style="height: 100 ; width: 300;"><br>
            <br><input type="submit" name="submit" value="SignUp"/>
        </form>
        </div>
        <div class="rside">
            <h3>FAQ's</h3>
            <ul class="collapsible" data-collapsible="expandable" style="width: 600">
    <li>
      <div class="collapsible-header">How do i register?</div>
      <div class="collapsible-body"><p>1.First go to the home page.</p>
          <p>2.Then click on "Register" menu.</p>
          <p>3.Then select you domain properly if you are a patient then go with "PATIENT" registration or else go with "DOCTOR"</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Do I need to be a specialist to use the System?</div>
      <div class="collapsible-body"><p>1.Yes, If you are Doctor then you must have your qualification.</p>
          <p>2.No, If you are a Patien.t</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">I am seeking medical advice about _________________.</div>
      <div class="collapsible-body"><p>Login or Sign up into the system and then you can use the "Disease Inference to seek medical attention"</p></div>
    </li>
  </ul>
        </div>
        
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
  
	</script>  
         
    </body>
</html>