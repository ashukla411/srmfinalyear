<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_dcotor.php');
}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>approve appointment</title>
  <link type="text/css" rel="stylesheet" href="contact.css"/>      
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>


	<nav class="blue lighten-2">
	<div class="container">
    <div class="nav-wrapper">
        <a href="" class="brand-logo active"><home</a>
      <li>Welcome <?php echo $_SESSION['username']; ?></li>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
             
          <li><a href="main_sevices_doctor.php">SERVICES</a></li>	
        <li><a href="contact_us.php">CONTACT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
	</div>
  </nav>
  </header>

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'appointment';
$table = 'appointment';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>Table: {$table}</h1>";
?>
<table border='1'>
    <tr>
<?php
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
?>
        <td><?php echo strtoupper($field->name) ?></td>
<?php
}
?>
<td>modify</td>
</tr>
<?php while($row = mysql_fetch_array($result)):?>
<div id="frm">
<tr>
    
<form method="post" action="finalup.php">
    <td><?php echo $row['id']; $id=$row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['Time'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['appdate'];?></td>
    <td><?php echo $row['dept'];?></td>
    <td><?php echo $row['subj'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><input type="submit" value="approve" name="approve<?php echo $id?>"/>
        <input type="submit" value="cancel" name="cancel<?php echo $id?>"/></td>
</form>
        
</tr>
</div>   
<?php endwhile;?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


    </body>
</html>