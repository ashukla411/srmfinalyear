<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'faq');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mesg =  $_POST['mesg'];
	$query = "INSERT INTO question (fname,lname,email,message) VALUES ('$fname','$lname','$email','$mesg')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "Query is submitted...";
	}
}

function SignUp()
{
if(!empty($_POST['lname']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM question WHERE lname = '$_POST[lname]' AND message = '$_POST[mesg]'") or die(mysql_error());

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