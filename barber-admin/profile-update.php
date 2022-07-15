<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Update Profile | Twin & Dad Barbershop';

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

if (isset($_POST['edit-admin'])) {

    $admin_id = $_GET["admin_id"];
    //Getting Post Values
    $admin_name = $_POST["admin_name"];
    $admin_phonenum = $_POST["admin_phonenum"];
    $admin_username = $_POST["admin_username"];
    $admin_password = $_POST["admin_password"];

    $sql = "UPDATE admin SET admin_name='$admin_name', admin_phonenum='$admin_phonenum', admin_username='$admin_username', admin_password='$admin_password' WHERE admin_id='$admin_id'";
    $query=mysqli_query($conn, $sql); {
        if ($query){
            echo "<script>alert('You have successfully updated the Your Profile');</script>";
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
    <title>Update Admin Profile</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile </h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a> -->
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
            </div>
            <div class="card-body">


                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <?php
                        $admin_id = $_GET["admin_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='$admin_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <input type="hidden" value="<?php echo $admin_id?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['admin_name']; ?>" placeholder="Name" name="admin_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_phonenum">Phone Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['admin_phonenum']; ?>" placeholder="Phone Number" name="admin_phonenum" maxlength="10" pattern="[0-9]+">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_email">Email</label>
                                <input type="email" class="form-control" value="" placeholder="Email" name="barber_email">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_un">Username</label>
                                <input type="text" class="form-control" value="<?php echo $row['admin_username']; ?>" placeholder="Username" name="admin_username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_password">Password</label>
                                <input type="text" class="form-control" placeholder="Password" value="<?php echo $row['admin_password']; ?>" name="admin_password" required="true">
                            </div>
                        </div>
                        
                    </div>

                    <?php
                    }
                    ?> 
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="edit-admin" class="btn btn-primary">Update Profile</button>

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