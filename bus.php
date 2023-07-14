<?php 
    include 'connection.php';
    include 'topnav.php';
    include 'headerbus.html'; 
?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Bus Records <a href="busadd.php?action=add" style="background-image: linear-gradient(); type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Bus Name</th>
                                        <th>Bus Type</th>
                                        <th>Driver ID</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM bus';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['BUS_NAME'].'</td>';
                            echo '<td>'. $row['BUS_TYPE'].'</td>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-default" href="bussearch.php?action=edit & id='.$row['BUS_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="busedit.php?action=edit & id='.$row['BUS_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="busdel.php?type=bus&delete & id=' . $row['BUS_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                </tbody>
                            </table>
                        </div>
        <script src="js/date-time.js"></script>
<?php include 'footer.php'; ?>