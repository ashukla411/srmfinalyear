<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_dcotor.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <style>
 
#frm{
    border: solid gray 1px;
    width: 30%;
    border-radius: 5px;
    margin: 100px auto;
    background: white;
    padding: 50px;
}
#btn{
    color: #fff;
    background: buttonhighlight;
    padding: 5px;
    margin-Left:40%;
}
</style>
        
    </head>
<body>
    
<header>

<nav class="blue lighten-2">
	<div class="container">
    <div class="nav-wrapper">
        <a href="" class="brand-logo active"><HOME</a>
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
 <div id="frm">
<form action="disease.php" method="get">
Symptoms: <input type="text" name="sym"><br>
Days: <input type="text" name="days"><br>
<input class="btn waves-effect waves-light "type="submit">
</form>  
 </div>
</body>
</html>