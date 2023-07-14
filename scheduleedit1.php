<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$arvl = $_POST['ARRIVAL'];
		    $dpt = $_POST['DEPARTURE'];
			$shift = $_POST['SHIFT'];
			$bid= $_POST['BUS_ID'];
			
		
	 			$query = 'UPDATE schedule set ARRIVAL ="'.$arvl.'",
					DEPARTURE ="'.$dpt.'",SHIFT ="'.$shift.'", BUS_ID="'.$bid.'" WHERE
					SCHEDULE_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "schedule.php";
		</script>
 <?php include 'footer.php'; ?>