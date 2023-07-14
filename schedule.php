<?php include 'connection.php';
include 'topnav.php'; 
include 'headerbusschedule.html';?>

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            Schedule BUS  <a href="scheduleadd.php?action=add" style="background-image: linear-gradient();  type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

                        <br> </br>       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Arrival</th>
                                        <th>Departure</th>
                                        <th>Shift</th>
                                        <th>Bus ID</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM schedule';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo '<tr>';
                            echo '<td>'. $row['ARRIVAL'].' AM</td>';
                            echo '<td>'. $row['DEPARTURE'].' PM</td>';
                            echo '<td>'. $row['SHIFT'].'</td>';
                            echo '<td>'. $row['BUS_ID'].'</td>';
                            
                            echo '<td> <a type="button" class="btn btn-default" href="schedulesearch.php?action=edit & id='.$row['SCHEDULE_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="scheduleedit.php?action=edit & id='.$row['SCHEDULE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="scheduledel.php?type=schedule&delete & id='.$row['SCHEDULE_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div><?php include 'footer.php'; ?>