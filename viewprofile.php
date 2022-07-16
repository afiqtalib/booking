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
  height: 75vh;
}
</style>

<body>

  <div class="card shadow mb-4 profile container mx-auto m-5 pt-5">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-dark">My Profile's </h6>
    </div>
    <div class="card-body">
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

                      echo '<div class="row justify-content-start">
                        <div class="col-2">
                          <strong>
                            #ID 
                          </strong>
                        </div>
                        <div class="col-4">
                          ' . $user_id . '  
                        </div>
                      </div>
                      <hr style="width:50%">';
                      
                      echo '<div class="row justify-content-start">
                        <div class="col-2">
                          <strong>
                            NAME 
                          </strong>
                        </div>
                        <div class="col-4">
                          ' . $name . '  
                        </div>
                      </div>
                      <hr style="width:50%">';

                      echo '<div class="row justify-content-start">
                        <div class="col-2">
                          <strong>
                            CONTACT NO 
                          </strong>
                        </div>
                        <div class="col-4">
                          ' . $phonenum . '  
                        </div>
                      </div>
                      <hr style="width:50%">';

                      echo '<div class="row justify-content-start">
                        <div class="col-2">
                          <strong>
                            EMAIL 
                          </strong>
                        </div>
                        <div class="col-4">
                          ' . $email . '  
                        </div>
                      </div>
                      <hr style="width:50%">';

                      echo '<div class="row justify-content-start">
                        <div class="col-2">
                          <strong>
                            USERNAME 
                          </strong>
                        </div>
                        <div class="col-4">
                          ' . $uname . '  
                        </div>
                      </div>
                      <hr style="width:50%">';

                      // echo '<div class="row justify-content-start">
                      //   <div class="col-2">
                      //     <strong>
                      //       PASSWORD 
                      //     </strong>
                      //   </div>
                      //   <div class="col-4">
                      //      ******
                      //   </div>';
                      

                      echo '<div class="col-4">
                      <button class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Update Your Profile - ' . $name . '">
                      <a href="profile.php?user_id='.$user_id.'" class="text-light">Update</a>
                      </button>
                      </div>
                        </div>';

                      // echo '#ID         : ' . $user_id . '<br>';         
                      // echo 'Full Names  : ' . $name  . '<br>';        
                      // echo 'Contact No  : ' . $phonenum . '<br>';         
                      // echo 'Email       : ' . $email . '<br>';         
                      // echo 'Username    : ' . $uname . '<br>';         
                      // echo 'Password    : ******** <br><br>'; 
                      
                      
                  }
              }
            ?>
      <!-- <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Cust ID</th>
              <th scope="col">Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
                
          </tbody>
        </table>
      </div> -->
    </div> 
  </div>
</body>
</html>

<?php
    include "includes/footer.php";
?>