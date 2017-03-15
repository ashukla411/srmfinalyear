<?php
session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=$_SERVER['HTTP_REFERER'];

    if((!$username) or (!$password))
   {
   header("Location:$login");
   exit();
   }
   $conn=@mysql_connect("localhost","root","") or die ("Cannot Connect");
   $rs=@mysql_select_db("registration",$conn) or die("DB ERROR");
   $sql="select * from patientreg where userName=\"$username\" and pass=\"$password\"";
   $rs=mysql_query($sql,$conn) or die ("could not execute");
   $rows=mysql_numrows($rs);
   if($rows!=0)
   {
   echo("<h2> $username ok welcome </h2>");
   $_SESSION['username']=$_POST['username'];
   header("Location: main_services_patient.php");
   }
   else
   {
   header("Location:$login");
   exit();
   }