<?php include'header.php' ;?>
<?php include'connection.php' ;?>


 <div class="col-lg-12">
                <?php
                		$rid= $_POST['SCHEDULE_ID'];
						$fr= $_POST['FAIR'];
						$str= $_POST['START'];
						$fsh= $_POST['FINISH'];
					   
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO route
								(ROUTE_ID,FAIR,START,FINISH)
								VALUES ('".$id."','".$fr."','".$str."','".$fsh."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "route.php";
		</script>
                    </div>