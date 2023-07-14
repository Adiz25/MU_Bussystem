  <?php include'header.php' ;?>
  <?php include'connection.php' ;?>

  <div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Add New Driver</h2> </div>
<div class="card-body">


                        <form role="form" method="post" action="drivertrans.php?action=add">
                            
                            <div class="card-body">
                            <div class="form-group">
                              <input class="form-control" placeholder="Driver ID" name="DRIVER_ID">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Driver Name" name="DRIVER_NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Employ Date" name="EMPLOY_DATE">
                            </div>
                       
                           
                            <button type="submit" class="btn btn-xs btn-info">Save Record</button>
                            <button type="reset" class="btn btn-xs btn-info">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

   

  </body>

</html>
