<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['serviceid']))
{
    $service_id=($_GET['serviceid']);

    $sql = "DELETE FROM services WHERE service_id='$service_id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Are you sure to delete this service');</script>"; 
        echo "<script>window.location.href = 'services.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>