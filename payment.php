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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_payment'])) 
{
    // $book_id=$_GET["book_id"];
    
    $card_name = ($_POST['card_name']);
    $card_no = ($_POST['card_no']);
    $exp_mth = ($_POST['exp_mth']);
    $exp_year = ($_POST['exp_year']);
    $cvv = ($_POST['cvv']);
    $pay_total= ($_POST['pay_total']);

    $sql = "INSERT INTO payment ( card_name, card_no, exp_mth, exp_year, cvv, pay_total) VALUES ('$card_name', '$card_no', '$exp_mth', '$exp_year', '$cvv', '$pay_total')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Your Booking has been successfully made');</script>"; 
        echo "<script>window.location.href = 'home.php'</script>"; 
    }
    else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid p-4">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Payment</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Payment for Booking</h6>
            </div>
            <div class="card-body">


                <!-- FORM UPDATE SERVICE -->
                <form method="POST">
                    <?php
                        // $book_id = $_GET["book_id"];
                        // $sql = "SELECT b.*,s.* 
                        // FROM bookings b
                        // JOIN services s 
                        // ON s.service_id = b.service_id
                        // WHERE book_id='$book_id'";
                        // $ret=mysqli_query($conn,$sql);
                        //     while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <!-- <input type="hidden" value=""> -->
                    <div class="row p-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Card Name</label>
                                <input type="text" class="form-control" placeholder="BANK IN MALAYSIA" name="card_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Card Number</label>
                                <input type="text" class="form-control"  placeholder="1111-2222-3333-4444" name="card_no" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_price">Exp Month</label>
                                <input type="month" class="form-control"  placeholder="September" name="exp_mth" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Username">Exp Year</label>
                                <input type="number" class="form-control" placeholder="2032" name="exp_year" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">CVV</label>
                                <input type="number" class="form-control" placeholder="****" name="cvv" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">TOTAL SERVICE (RM)</label>
                                <input type="text" class="form-control"  placeholder="RM353"  name="pay_total" required="true">
                            </div>
                        </div>
                        <label><input type="checkbox" checked="checked" name="" required="true">Butir Pembayaran will be encrypt</label>
                    </div>

                   <?php
                        ?>
                
                    <!-- SUBMIT BUTTON -->
                    <div class="text-center">
                        <button type="submit" name="submit_payment" class="btn btn-primary">Pay</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
        //Include Footer
        include 'includes/footer.php';
?>

<?php
// $conn=mysqli_connect("localhost", "root", "");
// $db=mysqli_select_db($conn, 'bbs_db')

// if ( isset($_POST['submit_booking']))
// {
//     $user_id = $_POST['user_id'];

//     $query = "UPDATE 'users' SET uname $name = '$_POST[name]', $uname = '$_POST[uname]', $email = '$_POST[email]', $phonenum = '$_POST[phonenum], $pass = '$_POST[password]' WHERE user_id='$_POST[user_id]'";
//     $query_run = mysqli_query($conn,$query);

//     if($query_run)
//     {
//         echo "Data Updated";
//     }
//     else 
//     {
//         echo "Data Not Updated";
//     }
// }

?>
<!-- Main Page Stylesheet -->
<!-- <link rel="stylesheet" href="css/main.css"> -->



