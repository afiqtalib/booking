<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['book_id']))
{
    $book_id=($_GET['book_id']);

    $sql = "DELETE FROM bookings WHERE book_id='$book_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if ($result) {
            echo "<script>window.confirm('Are you sure to cancel this customer booking');</script>"; 
        }
        // echo "<script>alert('Are you sure to cancel this customer booking');</script>"; 
        echo "<script>window.location.href = 'index.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>