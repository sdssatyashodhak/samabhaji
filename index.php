<html>
<head>
	<title>Trader's Diary
	</title>
	<style>
	img {
	float:top;
}
.cls
{
	font-size:18px;
	padding:0px 50px 20px 20px;
}
.a{
color:red;
}
.mg{
font-size:30px;
color:#0000ff;
}
hr { 
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 8px;
} 
table{
	border-collapse:collapse;
	position:center;
}
table, th, td {
    border: 1px solid white;
}
</style>
</head>
<body>
<img src="images/logo.gif" width=80% height=20%>
<hr>
<div align="center">
<table border="1" cellpadding="1" cellspacing="1">
<tr>
	<td><p class="cls"><form name="SignIn" action="Login.php" method="post">
	<span class="mg">Trader's Diary</span><br><br>
	Sign in to your account<br><br>
		<b>ID number</b><span style="margin-left:10px;"> <input type="text" name="uid" maxlength="10" style="width:150px;height:30px;"></span><br/><br/>
		<b>Password</b> <span style="margin-left:20px;">   <input type="password" name="upassword" maxlength="8" style="width:150px;height:30px;"></span></br><br/>
<input type="checkbox" value="1" name="remember"/>Keep me loging
		<input type="submit" name="submit" id="submit" value="LogIn" style="width:80px;height:25px;"></a><br>
			
			<span class="a"><?php
				if(isset($_REQUEST["err"]))
				echo"Invalid Id number or Password";
			?></span>
<br>New to TradersDiary?<br>
<a href ="Registration.html"><input type="button" name="button" id="button" value="Sign up" style="width:85px;height:25px;"></a>
	</form>
<a href ="forgot.php">Can't access your accont?</a>
<br><br></p>
</td></tr></table>
</div>
</body>
</html>