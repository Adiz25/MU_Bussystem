 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$did= $_POST['DRIVER_ID'];
						$dname= $_POST['DRIVER_NAME'];
					    $edate= $_POST['EMPLOY_DATE'];
						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO driver
								(DRIVER_ID,DRIVER_NAME,EMPLOY_DATE)
								VALUES ('".$did."','".$dname."','".$edate."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "driver.php";
		</script>
                    </div>