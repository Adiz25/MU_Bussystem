<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM stop
              WHERE
              LOCATION_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['LOCATION_ID'];
                $i= $row['LOCATION_NAME'];
                $a=$row['ROUTE_ID'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12" style="background-image: linear-gradient(black);">
                  <h1>Edit Records</h1>
                      <div class="col-lg-6"> 

                        <form role="form" method="post" action="stopedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Location Name" name="LOCATION_NAME" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Route ID" name="ROUTE_ID" value="<?php echo $a; ?>">
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