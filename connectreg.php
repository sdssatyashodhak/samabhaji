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

$value=$_POST['id'];
$value1=$_POST['fullname'];
$value2=$_POST['Password'];
$encrypt_pass=md5($value2);

$sql="INSERT INTO registration (Id,Name,Password) 
VALUES('$value','$value1','$encrypt_pass')";

if(!mysql_query($sql)){
	echo "<br/>";
	echo "This id number already exist";
	die();
}

mysql_close();
?>
<p class="ng">
Your data is successfully submitted Lognin again<br><br>
<a href ="index.php"><input type="button" name="button" id="button" value="OK"></a><br/><br/>
</p>
</body>
</html>