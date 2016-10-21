<?php
require "connect_to_mysql.php";

session_start();

$id=$_POST['uid'];
$value=$_POST['Symbol'];
$value1=$_POST['Price'];

$sql="INSERT INTO shares (id,Symbol,Price) VALUES ('$id','$value',$value1)";

if(!mysql_query($sql)){
	 $response = array();
    $response["success"] = false;  
    
    echo json_encode($response);
	die();
}
else {	
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
}

mysql_close();
?>