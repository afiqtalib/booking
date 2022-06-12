<!-- PHP INCLUDES -->
  <?php
    session_start();
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";
    include "functions.php";

    // SET TIMEZONE CALENDAR
    date_default_timezone_set("Asia/Kuala_Lumpur");
  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Booking | Barbershop</title>

		<!-- STYLE FOR BOOKING -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="css/booking.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

		<!-- JS for CALENDAR --> 
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  
		<script>
      // $("#datepicker").datepicker({
      //   beforeShowDay: function(date) {
      //   return [date.getDay() == 0 || date.getDay() == 1 || date.getDay() == 2 || date.getDay() == 3 || date.getDay() == 4 ] ;
      //   }
      // });
		</script>

     <!-- <script type="text/javascript">
            $(function () {
                $('#datepicker1').datepicker({
                    daysOfWeekDisabled: [0,6]
                });
            });
      </script> -->
	</head>
	
	<body>
		<section class="booking_section">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-1">
          <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">

              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-3">Booking Now for be Handsome Boy</h1>
                    </div>
                    
                    <!-- BOOKING FORM -->
                    <form action="" method="POST">
                      <?php
          
                      if(isset($_POST['submit_booking_form']) && $_SERVER['REQUEST_METHOD'] == 'POST')
                      {
                        // Selected SERVICES
                        $selected_service = $_POST['selected_service'];
                
                        // Selected BARBER
                        $selected_barber = $_POST['selected_barber'];
                
                        // Selected DATE
                        $selected_date = $_POST['selected_date'];
                
                        $cust_id=$_SESSION['user_id'];
                        // echo $cust_id.$selected_barber.$selected_date.$selected_service;
                
                        // Selected TIME 
                        $selected_time=$_POST['selected_time'];
                      
                        $stmt_booking = $conn->query("insert into bookings(service_id, barber_id, book_date, book_time,cust_id) values($selected_service, $selected_barber, '$selected_date', '$selected_time', $cust_id)");
                
                        echo "<div class = 'alert alert-success text-center mt-4'>";
                            echo "Your booking has been created successfully.";
                        echo "</div>";
                        
                        foreach ($_POST as $selected => $value){
                          echo "$selected = $value";
                        }
                      }
                      else {
                        echo "<div class = 'alert alert-danger text-center mt-4'>";
                        echo "Your booking unsuccessfully!!";
                        echo "</div>";      }
                      ?>

                      <!-- SELECT SERVICES  -->
                
                      <div class="form-check mt-2">--- Choose Hair Style---
                        <select class="form-select" aria-label="Default select example" name="selected_service">
                          <option value="" >--- Choose type of Hairstyle ---</option>

                          <?php 
                            $sql = "SELECT * FROM services";
                            // echo $sql;
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while ($row = $result->fetch_assoc()) {
                                ?>
                                  <option value="<?php echo $row['service_id'] ?>"><?php echo $row['service_name'] .' • RM'. $row['service_price'] ." • ". $row['service_duration'] ."min"?></option>
                                <?php
                              }
                            } 
                          ?>

                        </select>
                      </div>

                      <!-- SELECT BARBER  -->
                      <?php $sql = "SELECT COUNT(*) FROM services";
                                      $result = mysqli_query($conn, $sql);
                                      $countservices = mysqli_num_rows ($result);
                                      echo $countservices;?>
                      <div class="form-check mt-4">Choose Our Barber
                        <select class="form-select" aria-label="Default select example" name="selected_barber">
                          <option value="" >--- Choose Our Barber ---</option>

                          <?php 
                            $sql = "SELECT * FROM barbers";
                            // echo $sql;
                            $result = $conn->query($sql);                            
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while ($row = $result->fetch_assoc()) {
                                ?>
                                  <option value="<?php echo $row['barber_id'] ?>"><?php echo $row['barber_name'] ?></option>
                                <?php
                              }
                            } 
                          ?>
                          
                        </select>
                      </div>

                      <!-- SELECT DATE  -->

                      <div class="form-group mt-4">Select Date 
                        <input type="date" class="form-control form-control-user" name="selected_date"
                        mindate="tomorrow" min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" placeholder="MM/DD/YYYY">
                      </div>

                      <!-- SELECT TIME SLOT -->
                      <fieldset>
                        <legend>Select Times </legend>
                        <input type="radio" name="selected_time" id="radio-1">
                        <label for="radio-1">12:30 PM</label>
                      </fieldset>
                      
                      
                      <!-- SUBMIT BOOKING BUTTON -->
                      <div class="d-grid gap-2">
                        <button type="submit" name="submit_booking_form" value="submit" class="btn btn-primary">Submit</button>
                      <div>
        
                    </form>
                    <hr>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>           
</html>

			<!-- PHP INCLUDES -->
			<?php
				include "includes/footer.php";	
			?>