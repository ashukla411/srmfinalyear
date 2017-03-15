<!DOCTYPE HTML>
<html>
<head>

<title>PATIENT REGISTRATION</title>

<link rel="stylesheet" type="text/css" href="style_doc_pat_reg.css">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    
body{
    background-image: url(img/WDF_1534298.jpg);
    background-repeat: no-repeat;
    background-size: cover;
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


<div id="Sign-Up">
    <fieldset style="width:60%"><legend><strong>PATIENT REGISTRATION FORM</strong></legend>
<table border="0">
<tr>
<form method="POST" action="patient_connect_signup.php">
    <td><strong>Name</strong></td><td> <input type="text" name="name"></td>
</tr>
<tr>
    <td><strong>Email</strong></td><td> <input type="text" name="email"></td>
</tr>
<tr>
    <td><strong>UserName</strong></td><td> <input type="text" name="user"></td>
</tr>
<tr>
    <td><strong>Password</strong></td><td> <input type="password" name="pass"></td>
</tr>
<tr>
    <td><strong>Confirm Password </strong></td><td><input type="password" name="cpass"></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
</tr>
</form>
</table>
</fieldset>
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