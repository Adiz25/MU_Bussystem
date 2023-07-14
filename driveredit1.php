<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$dname = $_POST['DRIVER_NAME'];
		    $edate = $_POST['EMPLOY_DATE'];
			
		
	 			$query = 'UPDATE driver set DRIVER_NAME ="'.$dname.'",
					EMPLOY_DATE ="'.$edate.'" WHERE
					DRIVER_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "driver.php";
		</script>
 <?php include 'footer.php'; ?>