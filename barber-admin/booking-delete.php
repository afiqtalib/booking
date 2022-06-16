<?php
//database connection  file
include 'connect.php';

//Code for deletion
if(isset($_GET['bookid']))
{
    $book_id=($_GET['bookid']);

    $sql = "DELETE FROM bookings WHERE book_id='$book_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Are you sure to delete this barber profile');</script>"; 
        echo "<script>window.location.href = 'index.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
        
} 
?>