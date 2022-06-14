<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Edit Services';

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
    // $service_name = "";
    // $service_duration = "";
    // $service_price = "";
    // $service_desc ="";

if (isset($_POST['edit_service'])) {

    $service_id = $_GET["service_id"];
    //Getting Post Values
    $service_name = $_POST["service_name"];
    $service_duration = $_POST["service_duration"];
    $service_price = $_POST["service_price"];
    $service_desc =$_POST["service_desc"];

    $query=mysqli_query($conn, "UPDATE services SET service_name='$service_name', service_duration='$service_duration', service_price='$service_price', service_desc='$service_desc' WHERE service_id='$service_id'"); {
        if ($query){
            echo "<script>alert('You have successfully updated the data');</script>";
            echo "<script type='text/javascript'> document.location ='services.php'; </script>";
        }
        else
        {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Service</h6>
            </div>
            <div class="card-body">


                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <?php
                        $service_id = $_GET["service_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM services WHERE service_id='$service_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <input type="hidden" value="<?php echo $service_id?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_name">Service Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['service_name']; ?>" placeholder="Service Name" name="service_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_duration">Service Duration(min)</label>
                                <input type="text" class="form-control" value="<?php echo $row['service_duration']; ?>" placeholder="Service Duration" name="service_duration">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_price">Service Price(RM)</label>
                                <input type="text" class="form-control" value="<?php echo $row['service_price']; ?>" placeholder="Service Price" name="service_price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_description">Service Description</label>
                                <textarea class="form-control" value="<?php echo $row['service_desc']; ?>" name="service_desc" placeholder="Service Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?> 
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="edit_service" class="btn btn-primary">Edit service</button>

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