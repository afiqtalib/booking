<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Add New Service';

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

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_new_service'])) {
        $service_name = $_POST["service_name"];
        $service_duration = $_POST["service_duration"];
        $service_price = $_POST["service_price"];
        $service_desc =$_POST["service_desc"];
        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        $query=mysqli_query($conn, "INSERT INTO services (service_name, service_duration, service_price, service_desc) VALUE ('$service_name', '$service_duration', '$service_price', '$service_desc')");
        if ($query){
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='services.php'; </script>";
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
    <title>Add New Service</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Services</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Service</h6>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_name">Service Name</label>
                                <input type="text" class="form-control"  placeholder="Service Name" name="service_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_duration">Service Duration(min)</label>
                                <input type="text" class="form-control" placeholder="Service Duration" name="service_duration" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_price">Service Price(RM)</label>
                                <input type="text" class="form-control" placeholder="Service Price" name="service_price" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_description">Service Description</label>
                                <textarea class="form-control" placeholder="Service Description" name="service_desc" style="resize: none;" required="true"></textarea>
                            </div>
                        </div>
                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_service" class="btn btn-primary">Add service</button>

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