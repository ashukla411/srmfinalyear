<!DOCTYPE html>
<html>
<head>
    <title>doctor login</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
body{
     background-image: url(img/WDF_1534298.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
#frm{
    border: solid gray 1px;
    width: 40%;
    border-radius: 5px;
    margin: 100px auto;
    background: white;
    padding: 50px;
}
#btn{
    color: #fff;
    background: #337ab7;
    padding: 5px;
    margin-Left:40%;
}
</style>
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
  
    <div id="frm">
        <form action="config_doctor.php" method="post">
Username:
<input type="text" name="username"/>
<br>
password:
<input type="password" name="password"/>
<br>
<input class="btn waves-effect waves-light "type="submit" value="login"/>
</form>

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
         