<?php
    ob_start();
    session_start();

    //Page Title
    $pageTitle = 'Add New Slot | Twin & Dad Barbershop';

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

    // $errorMessage = "error inserted";
    // $successMessage = "successfully inseertt data";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_new_slot'])) {
        $timeslot = $_POST["time_slot"];
        // $dateslot = $_POST["date_slot"];
        $slotstatus = $_POST["slot_status"];
        // $barber = $_POST["slot_barber"];

        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        $query=mysqli_query($conn, "INSERT INTO slots (time_slot, slot_status) VALUE ('$timeslot', '$slotstatus')");
        if ($query){
            echo "<script>alert('You have successfully inserted the new timeslot');</script>";
            echo "<script type='text/javascript'> document.location ='slot.php'; </script>";
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
    <title>Add New Slot</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Timeslot</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a> -->
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Slot</h6>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Time Slot</label>
                                <input type="time" class="form-control"  placeholder="" name="time_slot" min="12:00" max="10:00" required="true">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Date Slot</label>
                                <input type="date" class="form-control"  placeholder="" name="date_slot" required="true">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_un">Slot Status</label>
                                <select class="custom-select" name="slot_status">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Not Available</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="barber_name">Barber</label>
                                <select class="custom-select" name="slot_barber">
                                    <option value="">--- Select Barber ---</option>
                                    <?php 
                                        $sql = "SELECT * FROM barbers";
                                        $result = $conn->query($sql);                            
                                        if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) 
                                        {
                                            ?>
                                            <option value="<?php echo $row['barber_id'] ?>"><?php echo $row['barber_name'] ?></option>
                                            <?php
                                        }
                                        } 
                                    ?>
                                </select>
                            </div>
                        </div> -->

                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_slot" class="btn btn-primary">Add Slot</button>

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