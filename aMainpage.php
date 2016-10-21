<?php
session_start();
$id=$_POST['uid'];

$conn=mysqli_connect("localhost","root","","tradersdiary") or die("server connection failed:".mysqli_error());
$s="select * from shares where id= '$id' ";
$result=$conn->query($s);

$response["records"] = array(); 

if($result->num_rows > 0){

    $response["success"] = true; 

	while( $row=$result->fetch_assoc() ){
		$companyname=$row["Symbol"];

		$url_one = "https://www.google.com/finance/info?q=NSE:$companyname";

		$ch_one = curl_init();

		curl_setopt($ch_one, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch_one, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch_one, CURLOPT_URL,$url_one);

		$result_one=curl_exec($ch_one);

		curl_close($ch_one);

		$result_one = str_replace('//', '', $result_one);

		$result_one = json_decode($result_one, true);

		$final_stock_result=$result_one;

 	   foreach ($final_stock_result as $response1)

		{
   			 $price=$response1['l'];
   			 $ltp=$response1['c_fix'];
   			 $change=$response1['cp_fix'];
		}
 
		$user = array();
        $user["Symbol"] = $row["Symbol"];   
        $user["Price"] = $row["Price"];   
        $user["CPrice"] = $price;   
        $user["Ltp"] = $ltp;   
        $user["Change"] = $change;  

        array_push($response["records"], $user);
	}
}
else
{
        $response["success"] = false;  
}

    echo json_encode($response);
?>