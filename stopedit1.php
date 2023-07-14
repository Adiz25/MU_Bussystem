<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$ln = $_POST['LOCATION_NAME'];
		    $rid = $_POST['ROUTE_ID'];
			
		
	 			$query = 'UPDATE stop set LOCATION_NAME ="'.$ln.'",
					ROUTE_ID ="'.$rid.'"  WHERE
					LOCATION_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "stop.php";
		</script>
 <?php include 'footer.php'; ?>