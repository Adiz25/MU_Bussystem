 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$ln= $_POST['LOCATION_NAME'];
					    $rid= $_POST['ROUTE_ID'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO stop
								(LOCATION_NAME,ROUTE_ID)
								VALUES ('".$ln."','".$rid."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "stop.php";
		</script>
                    </div>