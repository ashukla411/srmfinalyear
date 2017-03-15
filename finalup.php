<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="appointment"; // Database name 
$tbl_name="appointment"; // Table name

// Connect to server and select databse. 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 

$result = mysql_query("SELECT * FROM {$tbl_name}");
if (!$result) {
    die("Query to show fields from table failed");
}
while ($row = mysql_fetch_array($result)) {
    $id=$row['id'];
// Check if button name "Submit" is active, do this 
if(isset($_POST['approve'.$id]))
{ 
  $sql1="UPDATE `appointment` SET `status` = 'confirm' WHERE `appointment`.`id` = $id";
  $result1=mysql_query($sql1);
  
    if($result1){ 
header("location:list_app1.php");
}
 else {
     die("Query to show fields from table failed");
}
}

elseif (isset($_POST['cancel'.$id]))
{ 
  $sql2="UPDATE `appointment` SET `status` = 'cancel' WHERE `appointment`.`id` = $id";
  $result2=mysql_query($sql2);

    if($result2){ 
header("location:list_app1.php");
}
 else {
     die("Query to show fields from table failed");
}
}

}
mysql_close(); 
?>
    </body>
</html>
