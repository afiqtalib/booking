<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['barberid']))
{
    $barber_id=($_GET['barberid']);

    $sql = "DELETE FROM barbers WHERE barber_id='$barber_id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Are you sure to delete this barber profile');</script>"; 
        echo "<script>window.location.href = 'barbers.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>