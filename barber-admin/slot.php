<?php
    session_start();

    //Page Title
    $pageTitle = 'Time Slot';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Time Slot</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a> -->
            </div>

            <!-- Service Categories Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Booking Slot</h6>
                </div>
                <div class="card-body">

                    <!-- ADD NEW SLOT BUTTON -->
                    <a href="slot-add.php" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
                        <i class="fa fa-plus"></i> 
                        Add Slot
                    </a>

                    <!-- Categories Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Time Slot</th>
                                    <th>Date Slot</th>
                                    <th>Time Slot Status</th>
                                    <th>Barber Name</th>
                                    <th>Manage</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php
                                    $sql = "SELECT s.*, br.* 
                                    FROM slots s
                                    INNER JOIN barbers br 
                                    ON s.barber_id = br.barber_id";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    foreach ($rows as $slot)
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $slot['time_slot'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $slot['date_slot'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $slot['slot_status'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $slot['barber_name'];
                                        echo "</td>";
                                        echo "<td>";
                                        ?>
                                            <!-- DELETE & EDIT BUTTONS -->
                                            <ul class="list-inline m-0">

                                                    <!-- EDIT BUTTON -->
                                                    <li class="list-inline-item" data-toggle="tooltip" title="Edit Slot">
                                                        <button class="btn btn-success btn-sm rounded-0">
                                                            <a href="slot-edit.php?slot_id=<?php echo $slot['slot_id']; ?>" style="color: white;">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </button>
                                                    </li>
                                                    <!-- DELETE BUTTON -->
                                                    <li class="list-inline-item" data-toggle="tooltip" title="Delete Slot">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">   
                                                            <a href="slot-delete.php?slot_id=<?php echo $slot['slot_id']; ?>" style="color: white;">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </button>
                                                    </li>
                                                </ul>
                                            <?php
                                    
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  
<?php 
        
        //Include Footer
        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>