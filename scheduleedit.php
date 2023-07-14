<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM schedule
              WHERE
              SCHEDULE_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['SCHEDULE_ID'];
                $i= $row['ARRIVAL'];
                $a=$row['DEPARTURE'];
                $s=$row['SHIFT'];
                $b=$row['BUS_ID'];
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="scheduleedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Arrival" name="ARRIVAL" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Departure" name="DEPARTURE" value="<?php echo $a; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Shift" name="SHIFT" value="<?php echo $s; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Bus ID" name="BUS_ID" value="<?php echo $b; ?>">
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