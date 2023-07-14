  	
<?php include'header.php' ;?>
<?php include'connection.php' ;?>

<div class="card-body">
<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Add new Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(black, #014923);">


                        <form role="form" method="post" action="routetrans.php?action=add">
                        
                            <div class="form-group">
                              <input class="form-control" placeholder="Route ID" name="ROUTE_ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Fair" name="FAIR">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Start" name="START">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Finish" name="FINISH">
                            </div> 
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->


    </div>
    </div><?php include 'footer.php'; ?>