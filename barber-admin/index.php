<?php 
	session_start();

	//Check If user is already logged in
	if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
	{
        //Page Title
        $pageTitle = 'Dashboard | Twin & Dad Barbershop';

        //Includes
        include 'connect.php';
        include 'Includes/functions/functions.php'; 
        include 'Includes/templates/header.php';

?>
    <script>
        function myFunction() {
            window.print();
        }
        function printDiv() {
            var divContents = document.getElementById("report").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard - Admin</h1>
			<!-- <a href="#" onclick="printDiv()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i>
				Generate Report
			</a> -->
		</div>

		<!-- Content Row -->
		<div class="row">

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  				Total Customers
					  			</div>
                                  
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo countColumn ("user_id", "users")?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-boy fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
					  				Total Services
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo countColumn("service_id","services")?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-scissors-1 fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-info shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
					  				Barbers
					  			</div>
					  			<div class="row no-gutters align-items-center">
									<div class="col-auto">
						  				<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php echo countColumn("barber_id","barbers")?>
                                        </div>
									</div>
					  			</div>
							</div>
							<div class="col-auto">
					  			<i class="bs bs-man fa-2x text-gray-300"></i>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
					  				Bookings
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo countColumn("book_id","bookings")?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
				 		</div>
					</div>
			  	</div>
			</div>

            <div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
					  				Canceled Bookings
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                        $sql = "SELECT COUNT(book_id) as count FROM bookings WHERE status='cancel'";
                                        $result =mysqli_query($conn, $sql);
                                    
                                            while($row = mysqli_fetch_assoc($result)){
                                            echo $row["count"];
                                        }
                                    ?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
				 		</div>
					</div>
			  	</div>
			</div>

            <div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
					  				Completed Bookings
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                        $sql = "SELECT COUNT(book_id) as count FROM bookings WHERE status='completed'";
                                        $result =mysqli_query($conn, $sql);
                                    
                                            while($row = mysqli_fetch_assoc($result)){
                                            echo $row["count"];
                                        }
                                    ?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
				 		</div>
					</div>
			  	</div>
			</div>

            <div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
				  		<div class="row no-gutters align-items-center">
							<div class="col mr-2">
					  			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
					  				Upcoming Bookings
					  			</div>
					  			<div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                        $sql = "SELECT COUNT(book_id) as count FROM bookings WHERE status='uncompleted'";
                                        $result =mysqli_query($conn, $sql);
                                    
                                            while($row = mysqli_fetch_assoc($result)){
                                            echo $row["count"];
                                        }
                                    ?>
                                </div>
							</div>
							<div class="col-auto">
					  			<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
				 		</div>
					</div>
			  	</div>
			</div>
		</div>

		<!-- Appointment Tables -->
        <div class="card shadow mb-4">
            <div class="card-header tab" style="padding: 0px !important;background: #36b9cc!important">
            	<button class="tablinks active" onclick="openTab(event, 'all')">
            		Upcoming Bookings
            	</button>
                <!-- <button class="tablinks" onclick="openTab(event, 'upcomming')">
                	Upcoming Bookings
                </button> -->
                <button class="tablinks" onclick="openTab(event, 'completed')">
                	Completed Bookings
                </button>
                <button class="tablinks" onclick="openTab(event, 'canceled')">
                	Cancelled Bookings
                </button>
            </div>
            <div class="card-body">
            	<div class="table-responsive">

                <!-- ALL BOOKINGS -->                
                	<table class="table table-bordered tabcontent" id="all" style="display:table" width="100%" cellspacing="0">
                  		<thead>
                                <tr>
                                    <th>
                                        #Book ID
                                    </th>
                                    <th>
                                        Booked Date
                                    </th>
                                    <th>
                                        Booked Services
                                    </th>
                                    <th>
                                        Booked Time
                                    </th>
                                    <th>
                                        Customer
                                    </th>
                                    <th>
                                        Barber
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                        </thead>
                            <tbody>
                                <?php									
									// $sql = "SELECT service_name, barber_name
									// FROM services s 
									// INNER JOIN bookings b
									// ON s.service_id = b.service_id
									// INNER JOIN barbers br
									// ON br.barber_id = b.barber_id"; 
									$sql = "SELECT s.*, b.*, br.*, u.*, sl.*
                                    FROM services s 
                                    INNER JOIN bookings b 
                                    ON s.service_id = b.service_id 
                                    INNER JOIN barbers br 
                                    ON br.barber_id = b.barber_id 
                                    INNER JOIN users u 
                                    ON u.user_id = b.user_id
                                    JOIN slots sl
                                    ON b.slot_id = sl.slot_id 
									WHERE status='uncompleted'";

							
									$result = mysqli_query($conn, $sql);
                                    // while ($booking = mysqli_fetch_assoc($result))
									$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
									foreach($rows as $booking)
                                    {
                                
										echo "<tr>";
                                            echo "<td>";
                                                echo $booking['book_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['book_date'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['service_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['time_slot'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo " #";
                                                echo $booking['user_id'];
                                                echo " - ";
                                                echo $booking['name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['barber_name'];
                                            echo "</td>";
								?>
                                            <td>
                                                <ul class="list-inline m-0">

                                                     <!-- CANCEL BUTTON -->

                                                    <li class="list-inline-item" data-toggle="tooltip" title="Cancel Booking">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">
															<a href="booking-delete.php?book_id=<?php echo $booking['book_id']; ?> " style="color: white;">
																<i class="fas fa-calendar-times"></i>
															</a>
                                                        </button>

                                                         <!-- CANCEL MODAL  -->
                                                        <!-- <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Cancel Appointment</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to cancel this appointment?</p>
                                                                        <div class="form-group">
                                                                            <label>Tell Us Why?</label>
                                                                            <textarea class="form-control" id=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                        <button type="button" data-id = "" class="btn btn-danger cancel_appointment_button">Yes, Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </li>

													<!-- COMPLETED BUTTON -->
													<li class="list-inline-item" data-toggle="tooltip" title="Completed Appointment">
                                                        <!-- <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">
															<a href="booking-completed.php?book_id=<?php echo $booking['book_id']; ?> " style="color: white;">
																<i class="fas fa-calendar-check"></i>
															</a>
                                                        </button> -->
                                                    </li>
                                                </ul> 
                                            </td>
                                        </tr> 
										<?php } ?>

                            </tbody>
                		</table>

			<!-- COMPLETED BOOKINGS -->
                	<table class="table table-bordered tabcontent" id="completed" width="100%" cellspacing="0">
                  		<thead>
                                <tr>
                                    <th>
                                        #Book ID
                                    </th>
                                    <th>
                                        Booked Date
                                    </th>
                                    <th>
                                        Booked Services
                                    </th>
                                    <th style="width: 5%;">
                                        Booked Time
                                    </th>
                                    <th>
                                        Customer
                                    </th>
                                    <th>
                                        Barber
                                    </th>
                                    <th style="width: 5%;">
                                        Price (RM) 
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                        </thead>
                            <tbody>
                                <?php

									
									// $sql = "SELECT service_name, barber_name
									// FROM services s 
									// INNER JOIN bookings b
									// ON s.service_id = b.service_id
									// INNER JOIN barbers br
									// ON br.barber_id = b.barber_id"; 
									$sql = "SELECT book_id, service_name, service_price, barber_name, book_date, sl.time_slot, name, status
                                    FROM services s 
                                    INNER JOIN bookings b 
                                    ON s.service_id = b.service_id 
                                    INNER JOIN barbers br 
                                    ON br.barber_id = b.barber_id 
                                    INNER JOIN users u 
                                    ON u.user_id = b.user_id
                                    JOIN slots sl
                                    ON b.slot_id = sl.slot_id
									WHERE status='completed';";

							
									$result = mysqli_query($conn, $sql);
									$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
									foreach($rows as $booking){
                                
										echo "<tr>";
                                            echo "<td>";
                                                echo $booking['book_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['book_date'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['service_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['time_slot'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['barber_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['service_price'];
                                            echo "</td>";
											echo "<td>";
                                                echo $booking['status'];
                                                // echo '<br>';
                                                echo '<a  style="color: green;"><i class="fas fa-calendar-check fa-lg"></i></a>';
                                            echo "</td>";
								?>
                                        </tr> 
										<?php } ?>

                            </tbody>
                	</table>

					<!-- CANCELED BOOKINGS -->
					<table class="table table-bordered tabcontent" id="canceled" width="100%" cellspacing="0">
                  		<thead>
                                <tr>
                                    <th>
                                        #Booked ID
                                    </th>
                                    <th>
                                        Booked Date
                                    </th>
                                    <th>
                                        Booked Services
                                    </th>
                                    <th>
                                        Booked Time
                                    </th>
                                    <th>
                                        Customer
                                    </th>
                                    <th>
                                        Barber
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                        </thead>
                            <tbody>
                                <?php
									$sql = "SELECT book_id, service_name, barber_name, book_date, sl.time_slot, name, status
                                    FROM services s 
                                    INNER JOIN bookings b 
                                    ON s.service_id = b.service_id 
                                    INNER JOIN barbers br 
                                    ON br.barber_id = b.barber_id 
                                    INNER JOIN users u 
                                    ON u.user_id = b.user_id
                                    JOIN slots sl
                                    ON b.slot_id = sl.slot_id
									WHERE status='cancel'";

							
									$result = mysqli_query($conn, $sql);
									$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
									foreach($rows as $booking){
                                
										echo "<tr>";
                                            echo "<td>";
                                                echo $booking['book_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['book_date'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['service_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['time_slot'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['barber_name'];
                                            echo "</td>";
											echo "<td>";
                                                echo $booking['status'];
                                                echo '<a  style="color: red;"><i class="fas fa-calendar-times fa-lg"></i></a>';
                                            echo "</td>";
								?>
                                        </tr> 
										<?php } ?>

                            </tbody>
                	</table>
              	</div>
            </div>
        </div>
	</div>


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
