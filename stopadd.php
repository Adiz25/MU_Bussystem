<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header"style="background-image: linear-gradient(pink,#2144)"><h2>Add Stop</h2> </div>
<div class="card-body" style="background-image: linear-gradient(#2144,pink);">
                 

                        <form role="form" method="post" action="stoptrans.php?action=add">
                            
                               
                            <div class="form-group">
                              <input class="form-control" placeholder="Location Name" name="LOCATION_NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Route ID" name="ROUTE_ID">
                            </div>
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>