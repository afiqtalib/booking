<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Services | Twin & Dad Barbershop';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Services</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Services</h6>
                    </div>
                    <div class="card-body">

                        <!-- ADD NEW SERVICE BUTTON -->
                        
                        <a href="service-add.php" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
                            <i class="fa fa-plus"></i> 
                            Add Service
                        </a>

                        <!-- SERVICES TABLE -->

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price (RM)</th>
                                    <th scope="col">Duration (min)</th>
                                    <th scope="col">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM services";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        foreach($rows as $service)
                                        {
                                            echo "<tr>";
                                                echo "<td>";
                                                    echo $service['service_name'];
                                                echo "</td>";
                                                echo "<td style = 'width:50%'>";
                                                    echo $service['service_desc'];
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $service['service_price'];
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $service['service_duration'];
                                                echo "</td>";
                                                echo "<td>";?>
                                                <ul class="list-inline m-0">

                                                    <!-- EDIT BUTTON -->
                                                    <li class="list-inline-item" data-toggle="tooltip" title="Edit">
                                                        <button class="btn btn-success btn-sm rounded-0">
                                                            <a href="service-update.php?service_id=<?php echo $service['service_id']; ?>" style="color: white;">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </button>
                                                    </li>
                                                    <!-- DELETE BUTTON -->

                                                    <li class="list-inline-item" data-toggle="tooltip" title="Delete">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">   
                                                            <a href="service-delete.php?service_id=<?php echo $service['service_id']; ?>" style="color: white;">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <?php echo "</td>";
                                            echo "</tr>"; }?>   
                            </tbody>
                        </table>
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