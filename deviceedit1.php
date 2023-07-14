<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['DEVICE_ID'];
			$imei = $_POST['IMEI'];
		    $bid = $_POST['BUS_ID'];
			
	 			$query = 'UPDATE GPS_Device set IMEI ="'.$imei.'",
				 	BUS_ID ="'.$bid.'",LAT ="'.$lat.'", LNG="'.$lng.'" WHERE
					DEVICE_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "gpsdevice.php";
		</script>
 <?php include 'footer.php'; ?>