<!-- PHP INCLUDES -->
<?php 
    session_start(); 
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"; 

    // $sql="SELECT * FROM users WHERE user_id=$user_id";
    // $result=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_array($result);
    // $name=$row['name'];
    // $uname=$row['uname'];
    // $email=$row['email'];
    // $phonenum=$row['phonenum'];
    // $pass=$row['password'];


    // $user_id=$_GET["user_id"];

    // $name = ($_POST["name"]);
    // $username = ($_POST["username"]);
    // $email = ($_POST["email"]);
    // $phonenum = ($_POST["phonenum"]);
    // $password = ($_POST["password"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid  h-100">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between m-4">
            <h1 class="h3 mb-0 text-gray-800">My Booking</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
                <h6 class="h5 m-0 font-weight-bold text-dark">My Booking</h6>
            </div>
            <div class="card-body m-4">

                <!-- <div class="alert alert-success">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="messages text-center">
                        <div>Your booking has been created successfully!</div>
                    </div>
				</div> -->
                <!-- MY BOOKING -->
                
                    <table class="table table-bordered border-primary text-center">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Booked Date</th>
                                <th scope="col">Booked Time </th>
                                <th scope="col">Duration (min)</th>
                                <th scope="col">Booked Service</th>
                                <th scope="col">Barber</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>                          
                            <?php
                                $user = $_SESSION['user_id'];
                                $sql = "SELECT s.*, b.*, br.*, u.*, sl.*
                                FROM services s 
                                JOIN bookings b 
                                ON s.service_id = b.service_id 
                                JOIN barbers br 
                                ON br.barber_id = b.barber_id 
                                JOIN users u 
                                ON u.user_id = b.user_id
                                JOIN slots sl
                                ON sl.slot_id = b.slot_id
                                WHERE u.user_id = '$user' ";
        
                            $result = mysqli_query($conn, $sql);
                                while ($mybook=mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $mybook['book_id'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['book_date'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['time_slot'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['service_duration'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['service_name'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['barber_name'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['status'];
                                        echo "</td>";
                                    echo "</tr>";
								} ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
        //Include Footer
        // include 'includes/footer.php';
?>





