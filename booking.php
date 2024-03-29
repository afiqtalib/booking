<!-- PHP INCLUDES -->
  <?php
    session_start();
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";
    include "functions.php";

    // SET TIMEZONE CALENDAR
    date_default_timezone_set("Asia/Kuala_Lumpur");

    if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
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
      <?php
        if(isset($_POST['submit_booking_form']) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
          // Selected SERVICES
          $selected_service = $_POST['selected_service'];
  
          // Selected BARBER
          $selected_barber = $_POST['selected_barber'];
  
          // Selected DATE
          $selected_date = $_POST['selected_date'];
  
          $user_id=$_SESSION['user_id'];
          // echo $cust_id.$selected_barber.$selected_date.$selected_service;
  
          // Selected TIME 
          $selected_time=$_POST['selected_time'];

          // CODE TO READ ALL BOOKING TO CHECK REDUNDANT DATA
          // $servicelist = 'service_id';
          // $barberlist = 'barber_id'; 
          // $datelist = 'book_date';
          // $slotlist = 'slot_id'; 
          // $sql = "SELECT * FROM bookings WHERE service_id='$servicelist', barber_id='$barberlist', book_date='$datelist' AND slot_id='$slotlist'";
          // $result = mysqli_query($conn, $sql);
          // if ($selected_service == $servicelist && $selected_barber == $barberlist && $selected_date == $datelist && $selected_time == $slotlist){
          //   echo "<div class = 'alert alert-danger text-center mt-4'>";
          //     echo "Your booking unsuccessfully. Please Choose other Slot/Barber!!";
          //   echo "</div>";
          // }
          
          // else {
            // test code yg atas 
            $stmt_booking = $conn->query("insert into bookings(service_id, barber_id, book_date, slot_id, user_id, status) values($selected_service, $selected_barber, '$selected_date', '$selected_time', $user_id, 'uncompleted')");
    
            echo "<div class = 'alert alert-success text-center mt-4'>";
                echo "Your booking has been created successfully ";
                echo "<a href='mybooking.php' class='ca'>My Booking</a>";
            echo "</div>";
            
          
          // echo "<script type='text/javascript'> document.location ='mybooking.php'; </script>";
          // foreach ($_POST as $selected => $value){
          //   echo "$selected = $value";
          // }
        }
        // CODE ERROR BOOKING 
        // else {
        //   echo "<div class = 'alert alert-danger text-center mt-4'>";
        //   echo "Your booking unsuccessfully!!";
        //   echo "</div>";      }
      ?>
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-1">
          <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">

              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-3">Booking Now for being Handsome Boy</h1>
                    </div>
                    
                    <!-- BOOKING FORM -->
                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="POST">

                      <!-- SELECT SERVICES  -->
                
                      <div class="form-check mt-2">--- Choose Hair Style---
                        <select class="form-select" aria-label="Default select example" name="selected_service" required="true">
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
                      <div class="form-check mt-4">Choose Our Barber
                        <select class="form-select" aria-label="Default select example" name="selected_barber" required="true">
                          <option value="0" >--- Choose Our Barber ---</option>

                          <?php 
                            $sql = "SELECT * FROM barbers";
                            $result = $conn->query($sql);                            
                            if ($result->num_rows > 0) {
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
                        mindate="tomorrow" min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" placeholder="MM/DD/YYYY" required="true">
                      </div>

                      <!-- SELECT TIME SLOT -->

                      <div class="form-group mt-4">Select Time Slot 
                        <select class="form-select" aria-label="Default select example" name="selected_time" required="true">
                          <option value="" >--- Default ---</option>
                            <?php 
                              // $selected_barber = $_POST['selected_barber'];

                              $sql = "SELECT * FROM slots 
                              WHERE slot_status='available'";
                              // echo $sql;
                              $result = $conn->query($sql);                            
                              if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                  ?>
                                    <option type="time" value="<?php echo $row['slot_id'] ?>"><?php echo $row['time_slot'] ?></option>
                                  <?php
                                }
                              } 
                            ?>
                        </select>
                      </div>
                      
                      <!-- SUBMIT BOOKING BUTTON -->
                      <div class="d-grid gap-2">
                        <button type="submit" name="submit_booking_form" value="submit" href="" class="btn btn-primary" >Submit</button>
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
  <script>
    let bookdate = 0
    let selectbarber = 0
    function toggleslot(){
    if (document.getElementsByClassName("form-select")[1].value !=0  && document.getElementsByClassName("form-group mt-4")[0].children[0].value.length >=10){
      if (selectbarber != document.getElementsByClassName("form-select")[1].value  || bookdate != document.getElementsByClassName("form-group mt-4")[0].children[0].value){
        selectbarber = document.getElementsByClassName("form-select")[1].value
          bookdate = document.getElementsByClassName("form-group mt-4")[0].children[0].value
          getslot()
      }

      document.getElementsByClassName("form-group mt-4")[1].style.display = "block"
    }
    else {
      document.getElementsByClassName("form-group mt-4")[1].style.display = "none"
    }
  }

  function clearselect(){
    document.getElementsByClassName("form-group mt-4")[1].children[0].length=1
  }

  async function getslot(){
    if (document.getElementsByClassName("form-select")[1].value !=0  && document.getElementsByClassName("form-group mt-4")[0].children[0].value.length >=10){
      let target = document.getElementsByClassName("form-group mt-4")[1].children[0]
      let = book = document.getElementsByClassName("form-group mt-4")[0].children[0].value
      let barber = document.getElementsByClassName("form-select")[1].value
      let url = '/bbs/api.php?date='+book+'&&barber='+barber
      const response = await fetch (url)
      const obj = await response.json()
      clearselect()
      ctr =0
      while (ctr <obj.length){
        holder = document.createElement("option")
        holder.value = obj[ctr].value
        holder.innerHTML = obj[ctr].display
        document.getElementsByClassName("form-group mt-4")[1].children[0].appendChild(holder)
        ctr++
      }

  }}

  toggleslot()
    document.getElementsByTagName("form")[0].addEventListener("change", function a (){
      toggleslot()
    })
  </script>          
</html>

			<!-- PHP INCLUDES -->
			<?php
        }
        else 
        {
          // header("Location: login.php");
          // exit();
          // echo "<div class = 'alert alert-danger text-center mx-auto mt-5 pt-5'>";
          // echo "Please Login First!!";
          // echo "</div>";     
          echo "<script>alert('Please Login First Before Make a Booking!!');</script>"; 

          echo "<script type='text/javascript'> location.href ='login.php'; </script>";
           

        }
                              
				// include "includes/footer.php";	
			?>