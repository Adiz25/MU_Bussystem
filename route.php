<?php include 'connection.php';
include 'topnav.php';
include 'headerbusroute.html'; ?>
           <div class="col-lg-12">
                                 <div> 
            <i class="fas fa-table"></i>

               Route Records  <a href="routeadd.php?action=add" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add New</a>
            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>Fair</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM route';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['FAIR'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['FINISH'].'</td>';
                                             
                            echo '<td> <a type="button" class="btn btn-default" href="routesearch.php?action=edit & id='.$row['ROUTE_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="routeedit.php?action=edit & id='.$row['ROUTE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="routedel.php?type=route&delete & id=' . $row['ROUTE_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include 'footer.php'; ?>