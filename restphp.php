<?php
session_start();

$price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;




//variable definitions

//$time=2;

//DB Results
//$results=['xyz','def','ret'];

//$arr = [];

//$arr['status_code'] = 1;
//$arr['message'] ="Data found";
//$arr['data'] = $results;

//for($stock_price = 0; $stock_price <= 10; $stock_price++){
	//  echo "The number is: $stock_price <br>";
	  //$arr['stock_price'] = $stock_price;
//}



//$arr['time'] = $time;


//echo json_encode($arr);

$stock_price = rand(10,100);

$arr['stock_price'] = $stock_price;
$arr['price'] = ++$price;

echo json_encode($arr);

$_SESSION['price'] = $price;
?>

 <meta http-equiv="refresh" content="1" >  

