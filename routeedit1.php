<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$fr = $_POST['FAIR'];
			$str = $_POST['START'];
		   	$fsh = $_POST['FINISH'];
			
		
	 			$query = 'UPDATE route set FAIR ="'.$fr.'",START ="'.$str.'",FINISH ="'.$fsh.'"
					WHERE
					ROUTE_ID="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "route.php";
		</script>
 <?php include 'footer.php'; ?>