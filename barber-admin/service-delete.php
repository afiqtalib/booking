<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['service_id']))
{
    $service_id=($_GET['service_id']);

    $sql = "DELETE FROM services WHERE service_id='$service_id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Are you sure to delete this service #$service_id');</script>"; 
        echo "<script>window.location.href = 'services.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>