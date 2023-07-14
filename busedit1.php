<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$bname = $_POST['BUS_NAME'];
		    $btype = $_POST['BUS_TYPE'];
			$did= $_POST['DRIVER_ID'];
			
		
	 			$query = 'UPDATE bus set BUS_NAME ="'.$bname.'",
					BUS_TYPE ="'.$btype.'", DRIVER_ID="'.$did.'" WHERE
					BUS_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "bus.php";
		</script>
 <?php include 'footer.php'; ?>