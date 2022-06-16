<?php 
        include 'connect.php';
        include 'Includes/functions/functions.php'; 
// $barber_id = $_SESSION['barber_id'];
$sql = "SELECT COUNT(book_id) as count FROM bookings";
    $result =mysqli_query($conn, $sql);
    // $countrow = mysqli_num_rows($result);
    // echo $countrow;
    while($row = mysqli_fetch_assoc($result)){
      echo $row["count"];
    }
      echo "ffff ";
    echo "v ";
    echo countcolumn("service_id","services");
    ?>
    <?php echo countcolumn("service_id","services")?>