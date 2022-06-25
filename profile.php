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

if ( isset($_POST['update_profile'])) 
{
    $user_id=$_GET["user_id"];

    $name = ($_POST["name"]);
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);
    $phonenum = ($_POST["phonenum"]);
    $password = ($_POST["password"]);

    $sql="UPDATE users SET name='$name', username='$username', email='$email', phonenum='$phonenum', password='$password' WHERE user_id=$user_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Your Profile has been successfully updated');</script>"; 
        echo "<script>window.location.href = 'viewprofile.php'</script>"; 
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
    <title>Update Profile</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid p-4">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
            </div>
            <div class="card-body">


                <!-- FORM UPDATE SERVICE -->
                <form method="POST">
                    <?php
                        $user_id = $_GET["user_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <input type="hidden" value="<?php echo $user_id?>">
                    <div class="row ml-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Name" name="name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Phone Number </label>
                                <input type="text" class="form-control" value="<?php echo $row['phonenum']; ?>" placeholder="Phone Number" name="phonenum" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_price">Email</label>
                                <input type="Email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email" name="email" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Username" name="username" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" value="<?php echo $row['password']; ?>" placeholder="Password" name="password" required="true">
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?> 
                
                    <!-- SUBMIT BUTTON -->
                    <div class="text-center">
                        <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
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


?>



