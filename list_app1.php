<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_patient.php');
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
        <title>appointment table</title>
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
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>".strtoupper($field->name)."</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
