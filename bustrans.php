 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$bid= $_POST['BUS_ID'];
						$bname= $_POST['BUS_NAME'];
					    $btype= $_POST['BUS_TYPE'];
						$did= $_POST['DRIVER_ID'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO bus
								(BUS_ID,BUS_NAME, BUS_TYPE, DRIVER_ID)
								VALUES ('".$bid."','".$bname."','".$btype."','".$did."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "bus.php";
		</script>
                    </div>