<?php
    session_start();

     //Page Title
    $pageTitle = 'Customer | Twin & Dad Barbershop';

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
                <h1 class="h3 mb-0 text-gray-800">Customers</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            <!-- Clients Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
                </div>
                <div class="card-body">
                    
                    <!-- Clients Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Cust ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    foreach($rows as $customer)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $customer['user_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $customer['name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $customer['phonenum'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $customer['email'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $customer['username'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo "******";
                                            echo "</td>";
                                            echo "<td>";?>

                                                <ul class="list-inline m-0">
                                                    <!-- DELETE BUTTON -->

                                                    <li class="list-inline-item" data-toggle="tooltip" title="Delete">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">
                                                            <a href="customer-delete.php?userid=<?php echo $customer['user_id']; ?>" style="color: white;">
                                                                <i class="fa fa-trash"></i>    
                                                            </a>
                                                        </button>
                                                    </li>
                                                </ul>
                                            <?php echo "</td>";
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