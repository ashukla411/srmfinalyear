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

define('DB_HOST', 'localhost');
define('DB_NAME', 'appointment');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$Time =  $_POST['Time'];
	$phone =  $_POST['phone'];
	$appdate =  $_POST['appdate'];
	$dept =  $_POST['dept'];
	$subj =  $_POST['subj'];
	$query = "INSERT INTO appointment (name,email,Time,phone,appdate,dept,subj) VALUES ('$name','$email','$Time','$phone','$appdate','$dept','$subj')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
            header("Location: list_app.php");
	echo "Query is submitted...";
	}
}

function SignUp()
{
if(!empty($_POST['name']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM appointment WHERE name = '$_POST[name]' AND email = '$_POST[email]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ALREADY ENTERED A QUERY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>    
    </body>
</html>
