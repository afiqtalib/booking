<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Update Profile | Barber';

    //Includes
    include 'connect.php';
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/header.php';

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    //Check If user is already logged in
    if(isset($_SESSION['username_barber']) && isset($_SESSION['password_barber']))
{
?>

<?php
    // $service_name = "";
    // $service_duration = "";
    // $service_price = "";
    // $service_desc ="";

if (isset($_POST['edit_barber'])) {

    $barber_id = $_GET["barber_id"];
    //Getting Post Values
    $barber_name = $_POST["barber_name"];
    $barber_phonenum = $_POST["barber_phonenum"];
    $barber_email = $_POST["barber_email"];
    $barber_un = $_POST["barber_un"];
    $barber_password = $_POST["barber_password"];


    $query=mysqli_query($conn, "UPDATE barbers SET barber_name='$barber_name', barber_phonenum='$barber_phonenum', barber_email='$barber_email', barber_un='$barber_un', barber_password='$barber_password' WHERE barber_id='$barber_id'"); {
        if ($query){
            echo "<script>alert('You have successfully updated the data');</script>";
            echo "<script type='text/javascript'> document.location ='profile.php'; </script>";
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
    <title></title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Profile</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a> -->
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Barber's Profile</h6>
            </div>
            <div class="card-body">


                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <?php
                        $barber_id = $_GET["barber_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM barbers WHERE barber_id='$barber_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <input type="hidden" value="<?php echo $barber_id?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Barber Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['barber_name']; ?>" placeholder="Barber Name" name="barber_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_phonenum">Phone Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['barber_phonenum']; ?>" placeholder="0123443555" name="barber_phonenum" maxlength="10" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_email">Email</label>
                                <input type="email" class="form-control" value="<?php echo $row['barber_email']; ?>" placeholder="barber@gmail.com" name="barber_email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_un">Username</label>
                                <input type="text" class="form-control" value="<?php echo $row['barber_un']; ?>" placeholder="Barber Username" name="barber_un">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_password">Password</label>
                                <input type="password" class="form-control" placeholder="Barber Password" value="<?php echo $row['barber_password']; ?>" name="barber_password" required="true">
                            </div>
                        </div>
                        
                    </div>

                    <?php
                    }
                    ?> 
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="edit_barber" class="btn btn-primary">Edit Barber</button>

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