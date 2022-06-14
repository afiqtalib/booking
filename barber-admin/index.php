<?php 
	session_start();

	//Check If user is already logged in
	if(isset($_SESSION['username_barbershop_Xw211qAAsq4']) && isset($_SESSION['password_barbershop_Xw211qAAsq4']))
	{
        //Page Title
        $pageTitle = 'Dashboard';

        //Includes
        include 'connect.php';
        include 'Includes/functions/functions.php'; 
        include 'Includes/templates/header.php';

?>
	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i>
				Generate Report
			</a>
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
		</div>

		<!-- Appointment Tables -->
        <div class="card shadow mb-4">
            <div class="card-header tab" style="padding: 0px !important;background: #36b9cc!important">
            	<button class="tablinks active" onclick="openTab(event, 'Upcoming')">
            		Upcoming Bookings
            	</button>
                <button class="tablinks" onclick="openTab(event, 'All')">
                	All Bookings
                </button>
                <button class="tablinks" onclick="openTab(event, 'Canceled')">
                	Canceled Bookings
                </button>
            </div>
            <div class="card-body">
            	<div class="table-responsive">
                	<table class="table table-bordered tabcontent" id="Upcoming" style="display:table" width="100%" cellspacing="0">
                  		<thead>
                                <tr>
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
                                        Manage
                                    </th>
                                </tr>
                        </thead>
                            <tbody>
                                <?php
									$sql = "SELECT * FROM bookings";
									$sql = "SELECT s.service_name AS service_name, b.barber_name AS barber.name
									FROM TABLE bookings
									INNER JOIN services 
									ON book_id = bookings.service_id
									INNER JOIN barber 
									ON bookings.barber_id = 
									ORDER BY book_id";

  $sql= "SELECT teams.team_name AS team_name,
  projects.project_name AS project_name
FROM TABLE teams
INNER JOIN matches
  ON teams.id = matches.team_id
INNER JOIN matches
  ON matches.project_id = projects.id
ORDER BY teams.id";
									$result = mysqli_query($conn, $sql);
									$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
									foreach($rows as $booking)
                                
									echo "<tr>";
                                            echo "<td>";
                                                echo $booking['book_date'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['service_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['book_time'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['user_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $booking['barber_id'];
                                            echo "</td>";
                                        // echo "</tr>";
								?>
                                        <!-- <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td> -->
                                            <td>
                                                <ul class="list-inline m-0">

                                                     <!-- CANCEL BUTTON -->

                                                    <li class="list-inline-item" data-toggle="tooltip" title="Cancel Appointment">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#" data-placement="top">
                                                            <i class="fas fa-calendar-times"></i>
                                                        </button>

                                                         <!-- CANCEL MODAL  -->
                                                        <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
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
                                                        </div>

                                                    </li>
                                                </ul> 

                                               		
                                            </td>
                                        </tr> 

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
