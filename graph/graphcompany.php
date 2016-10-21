<?php

$companyname=$_POST["name"];

$url_one1="https://www.google.com/finance/getprices?q=$companyname&i=60&p=1d&f=d,o,h,l,c,v";

$ch_one1 = curl_init();

curl_setopt($ch_one1, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch_one1, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch_one1, CURLOPT_URL,$url_one1);

$result_one1=curl_exec($ch_one1);

curl_close($ch_one1);

$row=explode("\n",$result_one1);

for ($x=0;$x<count($row);$x++){
	$day[]=explode(",",$row[$x]);
}

$response1["records"] = array();

    for ($y=8;$y<sizeof($day)-1;$y++){
    	$user=array();
    	$a=(int)$day[$y]['0'];
    	$b=(int)$day[$y]['4'];
    	$user["id"]=$b;
  		array_push($response1["records"], $user);
}

    echo json_encode($response1);

 ?>
 