<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_dcotor.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HEALTH SEEKER SERVICES</title>
    
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link type="text/css" rel="stylesheet" href="contact.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    
   
 h1{ margin-left:100px;}
    #frm{
    border: solid gray 1px;
    width: 20%;
    border-radius: 10px;
    margin: 100px auto;
    background: #f4ff81;
    padding: 25px;

    }
</style>
 </head>
<body>
    
    
<header>


	<nav class="blue lighten-2">
	<div class="container">
    <div class="nav-wrapper">
        <a href="" class="brand-logo active"><home</a>
      <li>Welcome <?php echo $_SESSION['username']; ?></li>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
             
          <li><a href="main_services_patient.php">SERVICES</a></li>	
        <li><a href="contact_us.php">CONTACT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
	</div>
  </nav>

  </header>
   <h1> CATEGORIZATION OF HEALTH SEEKER NEEDS </h1>
   <div id="frm"><a href="disease_inference.php"><strong> DISEASE INFERENCE </strong> </div>
    
    

<div id="frm"><a href="doc_app.php"><strong> DOCTOR APPOINTMENT</strong> </div>
         
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