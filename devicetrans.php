 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$did= $_POST['DEVICE_ID'];
						$imei= $_POST['IMEI'];
						$bid= $_POST['BUS_ID'];
					    $lat= $_POST['LAT'];
						$lng= $_POST['LNG'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO GPS_Device
								(DEVICE_ID,IMEI, BUS_ID, LAT, LNG)
								VALUES ('".$did."','".$imei."','".$bid."','".$lat."','".$lng."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "gpsdevice.php";
		</script>
                    </div>