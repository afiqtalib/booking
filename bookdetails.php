<!-- PHP INCLUDES -->
<?php 
   ob_start();
    session_start(); 
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"; 
    $book = $_GET["book_id"];


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
        <div class="d-sm-flex align-items-center justify-content-between mb-4 m-3">
            <h1 class="h3 mb-0 text-gray-800">My Booking</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-dark">Booking Details</h6>
            </div>
            <div class="card-body p-5">


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
                                <th scope="col">Customer #ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>                          
                            <?php
                                $book = $_GET["book_id"];

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
                                WHERE u.user_id = '$user'
                                ";
        
                            $result = mysqli_query($conn, $sql);
                                while ($mybook=mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $book['book_id'];
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
                                            echo $mybook['user_id'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['name'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['phonenum'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $mybook['email'];
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
        include 'includes/footer.php';
?>





