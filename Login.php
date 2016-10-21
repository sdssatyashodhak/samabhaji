<?php
require "connect_to_mysql.php";
session_start();
$uid=$_REQUEST["uid"];
$upassword=md5($_REQUEST["upassword"]);
$upass=$_REQUEST["upassword"];

$s="select * from registration where (Id='".$uid."' and Password='".$upassword."')";

$result=mysql_query($s);
$details=mysql_fetch_assoc($result);
$cont=mysql_num_rows($result);

if($cont==1){
	if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
	 {	setcookie("login","1",time()+365*24*60*60);
	   header("location:Mainpage.php");
	 }
	else
	{
    $_SESSION["login"]="1";
   header("location:Mainpage.php");
	}
}

else{	 
    header("location:index.php?err=1");
	die();
}

mysql_close();

$_SESSION['uid']="$uid";
$_SESSION['upassword']="$upassword";
?>