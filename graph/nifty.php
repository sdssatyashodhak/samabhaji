<?php

$url_one='https://www.google.com/finance/getprices?&x=NSE&q=NIFTY&i=60&p=1d&f=d,o,h,l,c,v';

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

for ($y=7;$y<sizeof($day)-1;$y++){
	$response[$day[$y]['0']]=($day[$y]['4']);
}

    echo json_encode($response);

?>