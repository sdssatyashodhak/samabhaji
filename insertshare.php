<html>
<head>
<style>
	p{
border:2px solid black;
margin:50px 400px 0px 400px;
text-align:center;
}
.ng{
	font-size:30px;
}
.mg{
	font-size:40px;
	text-align:center;
}
img{
	float:top;
}
</style>
</head>
<body>
<img src="images/logo.gif" width="1350" height="250">
<span class="mg" style="margin-left:40%">Trader's Diary</span>
<?php
require "connect_to_mysql.php";
session_start();
$id=$_SESSION['uid'];

$value=$_POST['Symbol'];
$value1=$_POST['Price'];

$sql="INSERT INTO shares (id,Symbol,Price) VALUES ('$id','$value',$value1)";

if(!mysql_query($sql)){
	echo "<br/>";
	echo "Error while adding new share please try again";
	die();
}

mysql_close();
?>
<p class="ng">Your share list updated<br><br>
<a href ="Mainpage.php"><input type="button" name="button" id="button" value="OK"></a><br/><br/>
</p>
</body>
</html>