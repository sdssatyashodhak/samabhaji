<?php 
$db_host = "mysql9.000webhost.com";
$db_username = "a3868948_trade"; 
$db_pass = "shiv_96";
$db_name = "a3868948_trade";
@mysql_connect("$db_host","$db_username","$db_pass") or die("Connection failed: " . mysql_error());
@mysql_select_db("$db_name") or die("no database by that name");
?>