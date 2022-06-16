<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Add New Barber';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    //Check If user is already logged in
    if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
    {
?>

<?php 

    $errorMessage = "error inserted";
    $successMessage = "successfully inseertt data";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_new_barber'])) {
        $barber_name = $_POST["barber_name"];
        $barber_phonenum = $_POST["barber_phonenum"];
        $barber_email = $_POST["barber_email"];
        $barber_un =$_POST["barber_un"];
        $barber_password =$_POST["barber_password"];

        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        $query=mysqli_query($conn, "INSERT INTO barbers (barber_name, barber_phonenum, barber_email, barber_un, barber_password) VALUE ('$barber_name', '$barber_phonenum', '$barber_email', '$barber_un', '$barber_password')");
        if ($query){
            echo "<script>alert('You have successfully inserted the new barber data');</script>";
            echo "<script type='text/javascript'> document.location ='barbers.php'; </script>";
        }
        else
        {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Barber</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Barbers</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Barber</h6>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Barber Name</label>
                                <input type="text" class="form-control"  placeholder="Barber Name" name="barber_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_phonenum">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="barber_phonenum" required="true" maxlength="10" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="barber_email" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_un">Username</label>
                                <input type="text" class="form-control" placeholder="Barber Username" name="barber_un" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_password">Password</label>
                                <input type="text" class="form-control" placeholder="Barber Password" value="12345" name="barber_password" required="true">
                            </div>
                        </div>

                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_barber" class="btn btn-primary">Add Barber</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
        
        //Include Footer
        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>