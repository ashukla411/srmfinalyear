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
<style>
 h1{ margin-left:300px;}
    #frm{
    border: solid gray 1px;
    width: 10%;
    border-radius: 5px;
    margin: 100px auto;
    background: white;
    padding: 25px;


</style>
 </head>
<body>
Welcome <?php echo $_SESSION['username']; ?>,
 <a href="logout.php">logout</a> 
   <h1> CATEGORIZATION OF HEALTH SEEKER NEEDS </h1>
   <div id="frm"><a href="disease_inference.php"><strong> DISEASE INFERENCE </strong> </div>
    
    

<div id="frm"><a href="project2/home.php"><strong> DOCTOR APPOINTMENT</strong> </div>
         
          
        </body>
  </html>