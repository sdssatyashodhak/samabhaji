<?php

$url_one = "https://www.nseindia.com/";

$ch_one = curl_init();

curl_setopt($ch_one, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch_one, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch_one, CURLOPT_URL,$url_one);

$result_one=curl_exec($ch_one);

curl_close($ch_one);

$result_one = str_replace('//', '', $result_one);

$result_one = json_decode($result_one, true);

$final_stock_result=$result_one;

 $response1["nifty"] = array();

 foreach ($final_stock_result as $response)
{
    $user=array(); 
    $user =$response;
  array_push($response1["nifty"], $user); 
}    
echo json_encode($response1);

 ?>
 
