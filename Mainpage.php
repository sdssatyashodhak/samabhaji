<!DOCTYPE html>
<html>
<head>
	<title>Mainpage</title>
</head>
<body>
<?php
session_start();
$id=$_SESSION['uid'];

$conn=mysqli_connect("localhost","root","","tradersdiary") or die("server connection failed:".mysqli_error());
$s="select * from shares where id= '$id' ";
$result=$conn->query($s);

if($result->num_rows > 0){
	echo "<table border='1' ;width=100% ;cellpadding='1' ;cellspacing='1';>";
	echo "<tr><th>Company Name</th><th>Buying Price</th><th>Current Price</th><th>LTP</th><th>Change</th></tr>";
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

 	   foreach ($final_stock_result as $response)

		{
   			 $price=$response['l'];
   			 $ltp=$response['c_fix'];
   			 $change=$response['cp_fix'];
		}

	echo "<tr>";
	echo "<td>" .$row["Symbol"]. "</td>"; 
	echo "<td>" .$row["Price"]. "</td>";  
	echo "<td>" .$price. "</td>";  
	echo "<td>" .$ltp. "</td>";  
	echo "<td>" .$change. "%", "</td>"; 
	echo "</tr>";
	}
}
else
{
echo "You don't have any shares";
}



echo "<br>";
echo "<table border='0'>";
echo "<tr>";
echo "<td><br><br><a href=\"addshare.php\">Add shares</a></td>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>