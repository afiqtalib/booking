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
		<section class="booking_section">
			<h1>BOOKING FORM</h1>
			<div class="card-body">

			<form action="booking.php" id="resForm" method="post" target="_self">
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="name">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div> -->
					
					<!-- SELECT SERVICES --> 
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="radio" value="<?php echo $row['service_name'] ?>" name="<?php echo $row['service_name'] ?>" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">TEST</label>
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
                    </div> -->

						<!-- SELECT SERVICES  -->
                    <div class="form-check mb-3">
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
					<div class="form-check mb-3">
                      <select class="form-select" aria-label="Default select example" name="selected_barber">
						  <h5>huighiug</h5>
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

					<h2>Select Date </h2>
					<p>Date: <input type="text" id="datepicker" mindate="nextDay"></p>

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

                    <button type="submit" class="btn btn-primary">Submit</button>

				
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
</html>

			<!-- PHP INCLUDES -->
			<?php
				include "includes/footer.php";
			?>