<!-- PHP INCLUDES -->
<?php 
    session_start(); 
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"; 

    //Check If user is already logged in
//     if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
// {

    // $user_id=$_GET['updateid'];

    // $sql="SELECT * FROM users WHERE user_id=$user_id";
    // $result=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_array($result);
    // $name=$row['name'];
    // $uname=$row['uname'];
    // $email=$row['email'];
    // $phonenum=$row['phonenum'];
    // $pass=$row['password'];

if ( isset($_POST['update_profile submit'])) 
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
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="POST">
    <div class="container mx-auto m-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="customer_name">Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['name']?>"  placeholder="Enter Name" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="customer_email">Email</label>
                    <input type="email" class="form-control" value="<?php echo $row['email']?>" placeholder="Enter E-mail" name="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="customer_phonenum">Phone Number</label>
                    <input type="text" class="form-control" value="<?php echo $row['phonenum']?>" placeholder="Enter Phone Number" name="phonenum">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cust_username">Username</label>
                    <input type="text" class="form-control" value="<?php echo $row['username']?>"  placeholder="Enter Username" name="u name">
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="cust_password">Password</label>
                    <input type="password" class="form-control" value="<?php echo $row['pass']?>" placeholder="Enter Password" name="password">
                </div>
            </div>
        </div> -->
        <!-- Button Update Profile -->
        <!-- <div class=" gap-2 col-4 mx-auto">
            <button name="submit" type="button" class="btn btn-outline-primary btn-lg">Update Profile</button>
        </div>
    </div>
</form>
</body>
</html> -->

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



