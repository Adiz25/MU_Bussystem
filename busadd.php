<?php include 'connection.php';
include 'topnav.php'; ?>  

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header"><h2>Add New Bus</h2> </div>
<div class="card-body">
                 

                        <form role="form" method="post" action="bustrans.php?action=add">
                            
                            <div class="form-group">
                           <h6>Bus ID</h6><input class="form-control" placeholder="BUS ID" name="BUS_ID">
                            </div>
                            <div class="form-group">
                              <h6>Bus Name</h6><input class="form-control" placeholder="BUS Name" name="BUS_NAME">
                            </div>
                            <div class="form-group">
                              <h6>Bus Type</h6> <input class="form-control" placeholder="BUS Type" name="BUS_TYPE">
                            </div> 
                            <div class="form-group">
                              <h6>Driver ID</h6> <input class="form-control" placeholder="Driver ID" name="DRIVER_ID">
                            </div> 
                           
                            <button type="submit" class="btn btn-xs btn-info"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-xs btn-info"> <h6> Clear Entry </h6> </button>

                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>