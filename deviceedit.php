<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM GPS_Device
            WHERE
            DEVICE_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            while($row = mysqli_fetch_array($result))
            {   
              $zz= $row['DEVICE_ID'];
              $i= $row['IMEI'];
              $a=$row['BUS_ID'];
              $s=$row['LAT'];
              $b=$row['LNG'];
            }
              
              $id = $_GET['id'];
         
?>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="deviceedit1.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="IMEI" name="IMEI" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="BUS ID" name="BUS_ID" value="<?php echo $a; ?>">
                            </div> 

                            <button type="submit" class="btn btn-default">Update Record</button>
                            <br></br>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>