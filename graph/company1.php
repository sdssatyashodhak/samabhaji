<?php

$url_one='https://www.google.com/finance/getprices?q=HDFC&i=60&p=1d&f=d,o,h,l,c,v';

$ch_one = curl_init();

curl_setopt($ch_one, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch_one, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch_one, CURLOPT_URL,$url_one);

$result_one=curl_exec($ch_one);

curl_close($ch_one);

$row=explode("\n",$result_one);

for ($x=0;$x<count($row);$x++){
	$day[]=explode(",",$row[$x]);
}

$response = array();

    for ($y=8;$y<sizeof($day)-1;$y++){
    	$a=(int)$day[$y]['0'];
    	$b=(int)$day[$y]['4'];
	array_push($response , array($a,$b) );
}

$response = json_encode(array("record" => $response));
echo $response;
?>