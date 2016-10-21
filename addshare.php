<?php
session_start();
$_SESSION['uid'];
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="datepicker.css">
<script src="main.js"></script>
<script src="bootstrap-datepicker.js"></script>
<script>
$(function(){
$('.datepicker').datepicker();
});
</script>
<style>
.mg{
font-size:18px;
}
.a{
color:red;
}
pre{
border:2px solid black;
margin:0px 100px 0px 100px;
}
img{
float:top;
}
.ln{
font-size:25px;
color:#0000ff;
}
.z{
font-size:14px;
color:red;
}
</style>
</head>
<body>
<img src="images/logo.gif" width="1350" height="250">
<pre class="mg"><div style="margin-left:30px;margin-right:20px;">
<form action="ainsertshare.php" method="POST">
Symbol       <input type="text" name="Symbol" style="width:300px;height:35px;">

Price        <input type="text" name="Price" style="width:300px;height:35px;">

<span style="margin-left:35px;"><input type="submit" name="submit" id="submit" value="Submit"style="width:150px;height:30px;"></a>
</form></div>
</pre>
</body>
</html>