<?php include 'connection.php';
include 'topnav.php';
include 'headergpsdevice.html';?>

         <div class="col-lg-12">
                       <div>
            <i class="fas fa-table"></i>

            GPS Device  <a href="deviceadd.php?action=add" style="background-image: linear-gradient();  type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

                        <br> </br>       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>IMEI</th>
                                        <th>BUS_ID</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM GPS_Device';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo '<tr>';
                            echo '<td>'. $row['IMEI'].'</td>';
                            echo '<td>'. $row['BUS_ID'].'</td>';
                            echo '<td>'. $row['LAT'].'</td>';
                            echo '<td>'. $row['LNG'].'</td>';
                            
                            echo '<td> <a type="button" class="btn btn-default" href="devicesearch.php?action=edit & id='.$row['DEVICE_ID'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="deviceedit.php?action=edit & id='.$row['DEVICE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-default" href="devicedel.php?type=gpsdevice&delete & id='.$row['DEVICE_ID'] . '">DELETE </a>';
                            echo ' <a  type="button" class="btn btn-default" href="googleMap.php?id='.$row['DEVICE_ID'] . '">Map View </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div><?php include 'footer.php'; ?>