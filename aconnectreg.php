<?php
require "connect_to_mysql.php";

$value=$_POST['id'];
$value1=$_POST['fullname'];
$value2=$_POST['Password'];
$encrypt_pass=md5($value2);

$sql="INSERT INTO registration (Id,Name,Password) 
VALUES('$value','$value1','$encrypt_pass')";

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