 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$sid= $_POST['id'];
						$arvl= $_POST['ARRIVAL'];
					    $dpt= $_POST['DEPARTURE'];
						$bid= $_POST['BUS_ID'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO schedule
								(SCHEDULE_ID,ARRIVAL, DEPARTURE, BUS_ID)
								VALUES ('".$sid."','".$arvl."','".$dpt."','".$bid."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "schedule.php";
		</script>
                    </div>