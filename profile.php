<!-- PHP INCLUDES -->
<?php
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";
?>

<!-- Main Page Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<div class="container mx-auto m-5 pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="employee_phone">Name</label>
                <input type="text" class="form-control" value=""  placeholder="Enter Name" name="cust_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="employee_email">Email</label>
                <input type="email" class="form-control" value="" placeholder="Enter E-mail" name="cust_email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="employee_email">Phone Number</label>
                <input type="text" class="form-control" value="" placeholder="Enter Phone Number" name="cust_phonenum">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cust_username">Username</label>
                <input type="text" class="form-control" value=""  placeholder="Enter Username" name="cust_username">
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="cust_password">Password</label>
                <input type="password" class="form-control" value="" placeholder="Enter Password" name="cust_password">
            </div>
        </div>
    </div>
    <!-- Button Update Profile -->
    <div class=" gap-2 col-4 mx-auto">
        <button type="button" class="btn btn-outline-primary btn-lg">Update Profile</button>
    </div>
</div>

<?php
    include "includes/footer.php";
?>