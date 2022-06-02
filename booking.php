<!-- PHP INCLUDES -->
<?php
    include "db_con.php";
    include "includes/header.php";
	include "includes/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Booking Form</title>
		<!-- Style for booking -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="css/booking.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">

		<!-- Script for calendar --> 
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  		<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  		<script>
			$( function() {
				$( "#datepicker" ).datepicker();
			} );
		</script>
  
		<script>
			mobiscroll.datepicker('#picker', {
			controls: ['calendar']
			});
		</script>
	</head>
	
		
	<body>
		<section class="booking_section pt-5">
			<div class="card">
				<div class="card-header text-xl-center text-white bg-primary mb-3">BOOKING</div>


				<form action="booking.php" id="resForm" method="POST" target="_self">

					<!-- SELECT SERVICES --> 
                    <!-- <div class="form-check">

                      <input class="form-check-input" type="radio" value="<?php echo $row['service_name'] ?>" name="<?php echo $row['service_name'] ?>" id="taktahu">
                      <label class="form-check-label" for="taktahu">SELECT anything</label>
						<?php 
							$sql = "SELECT * FROM services";

							// echo $sql;
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) {
								// output data of each row
								if ($row = $result->fetch_assoc()) {
								?>
									<option value="<?php echo $row['service_name'] ?>"><?php echo $row['service_name'] ?></option>
								<?php
								}
							} 
							?>
                    </div> -->

						<!-- SELECT SERVICES  -->
                    <div class="form-check mt-2">--- Choose type of Hair Cut ---
                      <select class="form-select" aria-label="Default select example" name="selected_services">
                        <option value="" >--- Choose type of Hair Cut ---</option>
                        <?php 
                          $sql = "SELECT * FROM services";

                          // echo $sql;
                          $result = $conn->query($sql);
                          
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                              ?>
                                <option value="<?php echo $row['service_name'] ?>"><?php echo $row['service_name'] ?></option>
                              <?php
                            }
                          } 
                        ?>
                      </select>
                    </div>

						<!-- SELECT BARBER  -->
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
                                <option value="<?php echo $row['barber_name'] ?>"><?php echo $row['barber_name'] ?></option>
                              <?php
                            }
                          } 
                        ?>
                      </select>
                    </div>

					<!-- SELECT DATE  -->
					<div class="form-group">Select Date 
						
                      <input type="date" class="form-control form-control-user" mindate="nextDay" min="<?php echo date('Y-m-d') ?>">
                    </div>
					
					<!-- <div class="form-check">
						<h2>Select Date </h2>
						<p>Date: <input type="text" id="datepicker" mindate="nextDay" name="selected_date"></p>
					</div> -->
					<fieldset>
						<legend>Select Times </legend>
						<input type="radio" name="radio-1" id="radio-1">
						<label for="radio-1">12:30 PM</label>
					<br>
						<input type="radio" name="radio-1" id="radio-1">
						<label for="radio-2">2:00 PM</label>
					<br>
						<input type="radio" name="radio-1" id="radio-2">
						<label for="radio-3">3:30 PM</label>
					</fieldset>

					<div class="d-grid gap-2">
                    <button type="submit_booking_form" class="btn btn-primary">Submit</button>
					<div>
						
				
                </form>
            </div>
				
<!-- <?php
// $link = mysqli_connect("localhost","root","","bbs_db");

// $sql = "SELECT service_name FROM services GROUP BY service_name;";

// $result = mysqli_query($link,$sql);
// if ($result != 0) {
//     echo '<label> Select Hair Cut :';
//     echo '<select service_name="city">';
//     echo '<option value="">--- Choose type of Hair Cut ---</option>';

//     $num_results = mysqli_num_rows($result);
//     for ($i=0;$i<$num_results;$i++) {
//         $row = mysqli_fetch_array($result);
//         $name = $row['service_name'];
//         echo '<option value="' .$name. '">' .$name. '</option>';
//     }

//     echo '</select>';
//     echo '</label>';
// }

// mysqli_close($link);
?> -->
			</select>
			</form>
		</section>
	</body>
	<!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Booking</h1>
                  </div>

                  <form class="user" action="bookingAction.php" method="POST">
                    
                    <div class="form-group">
                      <input type="date" class="form-control form-control-user" min="<?php echo date('Y-m-d') ?>">
                    </div>
                    <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="roomNumber">
                      <option value="" selected>Default</option>
                      <?php
                      include 'connection.php';
                      $sql = "SELECT * FROM Hotel";

                      // echo $sql;
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                      ?>
                          <option value="<?php echo $row['roomNumber'] ?>"><?php echo $row['roomNumber'] ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                    </div>

                    <button class="btn btn-primary btn-user btn-block">
                      Book
                    </button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
</html>

			<!-- PHP INCLUDES -->
			<?php
				include "includes/footer.php";	
			?>