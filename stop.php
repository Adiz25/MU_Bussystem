<?php include 'connection.php';
include 'topnav.php'; 
include 'headerbusstop.html';?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Stops Records  <a href="stopadd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Location Name</th>
                                        <th>Route ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM stop';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['LOCATION_NAME'].'</td>';
                            echo '<td>'. $row['ROUTE_ID'].'</td>';
                            echo '<td> <a type="button" class="btn btn-default" href="stopsearch.php?action=edit & id='.$row['LOCATION_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="stopedit.php?action=edit & id='.$row['LOCATION_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="stopdel.php?type=bus&delete & id=' . $row['LOCATION_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>