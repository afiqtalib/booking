<?php
    session_start();
    include "connect.php";
    include "includes/header.php";    
    include "includes/navbar.php";  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Profile</title>
</head>

<style>
.profile {
  height: 70vh;
}
</style>

<body>

  <div class="card shadow mb-4 profile container mx-auto m-5 pt-5">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-dark">Customers</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Cust ID</th>
              <th scope="col">Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $user_id=$_SESSION['user_id'];
              $sql="SELECT * FROM users WHERE user_id='$user_id'";
              $result =mysqli_query($conn,$sql);
              if($result) {
                  while ($row=mysqli_fetch_assoc($result)) {
                      $user_id=$row['user_id'];
                      $name=$row['name'];
                      $phonenum=$row['phonenum'];
                      $email=$row['email'];
                      $uname=$row['username'];
                      // $password=$row['password'];
                      echo'<tr>
                      <th scope="row">'.$user_id.'</th>
                      <td>'.$name.'</td>
                      <td>'.$phonenum.'</td>
                      <td>'.$email.'</td>
                      <td>'.$uname.'</td>
                      <td>*******</td>
                      <td><button class="btn btn-primary my-5">
                        <a href="profile.php?user_id='.$user_id.'" class="text-light">Update Profile</a>
                        </button>
                      </td>
                    </tr>';
                  }
              }
            ?>    
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>

<?php
    include "includes/footer.php";
?>