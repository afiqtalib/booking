<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['slot_id']))
{
    $slot_id = ($_GET['slot_id']);


    $sql = "DELETE FROM slots WHERE slot_id='$slot_id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Are you sure to delete this slot');</script>"; 
        echo "<script>window.location.href = 'slot.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>