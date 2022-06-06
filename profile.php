<!-- PHP INCLUDES -->
<?php 
    session_start(); 
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

    // $user_id=$_GET['user_id'];
    // $sql="SELECT * FROM 'users' WHERE user_id='$user_id'";
    // $result=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_assoc($result);
    // $name=$row['name'];
    // $uname=$row['uname'];
    // $email=$row['email'];
    // $phonenum=$row['phonenum'];
    // $pass=$row['password'];

    // if ( isset($_POST['submit'])) {
    //     $name = ($_POST['name']);
    //     $uname = ($_POST['uname']);
    //     $email = ($_POST['email']);
    //     $phonenum = ($_POST['phonenum']);
    //     $pass = ($_POST['password']);

    //     $sql="UPDATE 'users' SET name='$name', uname='$uname', email='$email', phonenum='$phonenum', password='$pass' WHERE user_id='$user_id'";
    //     $result = mysqli_query($conn, $sql);
    //     if($result){
    //         echo "updated data profile";
    //     }
    //     else {
    //         die(mysqli_error($conn));
    //     }
    // }
?>

<!DOCTYPE html>
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
                    <label for="employee_phone">Name</label>
                    <input type="text" class="form-control" value=""  placeholder="Enter Name" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="employee_email">Email</label>
                    <input type="email" class="form-control" value="" placeholder="Enter E-mail" name="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="employee_email">Phone Number</label>
                    <input type="text" class="form-control" value="" placeholder="Enter Phone Number" name="phonenum">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cust_username">Username</label>
                    <input type="text" class="form-control" value=""  placeholder="Enter Username" name="username">
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group"> 
                    <label for="cust_password">Password</label>
                    <input type="password" class="form-control" value="" placeholder="Enter Password" name="password">
                </div>
            </div>
        </div>
        <!-- Button Update Profile -->
        <div class=" gap-2 col-4 mx-auto">
            <button name="submit" type="button" class="btn btn-outline-primary btn-lg">Update Profile</button>
        </div>
    </div>
</form>
</body>
</html>

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



<?php
    include "includes/footer.php";
?>