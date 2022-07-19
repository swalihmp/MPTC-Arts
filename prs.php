<?php
   $username = $_POST['user'];
   $password = $_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);
   
   mysql_connect("localhost","root","");
   mysql_select_db("arts");
   
   $result = mysql_query("select * from login where username = '$username' and password = '$password'")
               or die("Failed to connect".mysql_error());
   $row = mysql_fetch_array($result);
   if($row['username'] == $username && $row['password'] == $password )
   {
	   echo "LOgin success";
   }
   else
   {
	   echo "Failed to login";
   }
?>

