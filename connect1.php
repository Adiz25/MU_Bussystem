<html>
<body>

<?php

$dbname = 'busscheduledb';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

if(isset($_GET["temperature"])){
    $lat = $_GET["temperature"];
$lng = $_GET["humidity"]; 
$zz = 1;
echo $lat."<br>";
echo $lng."<br>";
echo $zz;

$query = "UPDATE `GPS_Device` SET `LAT` = '$lat', `LNG` = '$lng' WHERE
					`DEVICE_ID` = $zz ";
					$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
echo $query;
if($result){
echo 'success';
}
else{
	echo ' fails';
}
}


?>
</body>
</html>