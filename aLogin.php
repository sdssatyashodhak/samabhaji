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

 $response = array(); 

if($cont==1){
        $response["success"] = true;  
        $response["Id"] = $uid; 
}
else{ 
        $response["success"] = false; 
}

mysql_close();
    echo json_encode($response);

?>