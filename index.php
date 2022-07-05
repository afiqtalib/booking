<!-- PHP INCLUDES -->
<?php
    session_start();
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

// if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
?>

<!-- Main Page Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<html>

    <!-- HOME SECTION --> 
    <section class="home-section"id="home">
        <div class="home-section-container">
            <div class="bg-image">
                <img src="design/barbers-2.jpg" alt="Snow" style="width:100%;">
            </div>

            <div class="bg-text card-header text-center"> Hi, 
                <?php 
                    if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    else {
                        echo "customer";
                    }
                ?>

                <span class="overlay-text text-center">
                    - Welcome to Twin & Dad Barbershop 
                    <br><br>
                    It's Not Just a Haircut, It's an Experience.
                    <br>
                    - Quality Over Quantity -
                    <br><br>
                    Our Booking Policy :
                    <br>
                    <div class="text-start pl-5">
                        1) Booking early a day
                        <br>
                        2) Just 3 barbers only set in booking system
                        <br>
                        3) 4 barbers are available for customer walk-in. So you can walk-in if not available in system
                        <br>
                        4) Contact Us if want to cancellation booking
                        <br>
                </span>
                    </div>
                <div class="d-grid gap-2 mt-5">
                    <a class="btn btn-light btn-lg" href="booking.php">BOOK NOW</a>
                </div>
                
            </div>
        <div>
    </section>

    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">


        <div class="grid-container mb-5">
            <div class="section_heading">
                <h3 style="color: whitesmoke; ">Men's Grooming Services</h3>
                <!-- <h2>Our Barber Pricing</h2> -->
                <div class="heading-line"></div>
            </div>
            <div class="row m-5">
                <?php
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                while ($service =  mysqli_fetch_assoc($result)) {
                ?>

                    <div class="card col-6 border-secondary pt-2  mx-auto" style="width: 18rem" >
                        <img src="design/haircut.jpg" class="card-img-top rounded mx-auto d-block" alt="Team Member" style="width: 100%;">
                        <div class="card-body text-center text-dark">
                            <h5 class="card-title"> <?php echo $service ['service_name'];?> </h5>
                            <p class="card-text"> RM <?php echo $service ['service_price'];?> </p>
                            <p class="card-text"><?php echo $service ['service_duration'];?> min </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <!-- STYLE for SERVICES SECTION --> 
        <style>
            * {
                box-sizing: border-box;
            }
            
            .gallery .column {
                float: left;
                width: 25%;
                padding: 15px;
            }
            
            /* Clearfix (clear floats) */
            .gallery::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>

    <!-- SERVICES SECTION --> 
    <section class="service-section" id="service">

        <div class="section_heading ">
            <h3>Our Gallery</h3>
        </div>

            <div class="row">

                <?php
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);
                $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($row as $services)  {
                ?>
                    <!-- <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <ul class="price_list">
                                <li>
                                    <h5><?php echo $services['service_name'] ?></h5>
                                    <p><?php echo $services['service_desc'] ?></p>
                                    <span class="price">RM<?php echo $services['service_price'] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                <!-- <div class="card m-3 g-col-6 " style="width: 18rem;">
                    <img src="design/haircolor.jpg" class="card-img-top" alt="hairstyle">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $services['service_name'];?></h5>
                        <p class="card-text"> <?php echo $services['service_price'];?><span class="dot-separator"> . </span><?php echo $services['service_duration']; ?></p>
                        <small><?php echo $services['service_desc'];?></small>
                    </div>
                </div> -->

            </div>
            <?php } ?>

        <div class="gallery">
            <div class="column">
                <img src="design/haircolor.jpg" alt="hairstyle" style="width:100%">
            </div>

            <div class="column">
                <img src="design/haircolor-2.jpg" alt="hairstyle" style="width:100%" >
            </div> 

            <div class="column">
                <img src="design/haircut.jpg" alt="hairstyle" style="width:100%">
            </div>

            <div class="column">
                <img src="design/haircut-2.jpg" alt="hairstyle" style="width:100%" >
            </div>

            <div class="column">
                <img src="design/hairperm.jpg" alt="hairstyle" style="width:100%">
            </div>

            <div class="column">
                <img src="design/haircurly.jpg" alt="hairstyle" style="width:100%">
            </div>
            
            <div class="column">
                <img src="design/hairline.jpg" alt="hairstyle" style="width:100%" >
            </div>

            <div class="column">
                <img src="design/mullethair.jpg" alt="hairstyle" style="width:100%" >
            </div>
        </div>
    </section>
    <!-- END SERVICES SECTION --> 

    <!-- START BARBER SECTION --> 
    <section class="barber-section" id="barber">
        <div class="container">
            <div class="section_heading">
                <h3 style="color: grey;">Our Barbers</h3>
            </div>
            <div class="row">

            <?php
            $sql = "SELECT * FROM barbers";
            $result = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            while ($barber =  mysqli_fetch_assoc($result)) {
            
            
            ?>

                <div class="card col border-secondary pt-3 m-auto" style="width: 35%;" >
                    <img src="design/team-1.jpg" class="card-img-top rounded mx-auto d-block" alt="Team Member" style="width: 100%;">
                    <div class="card-body text-center">
                    <h5 class="card-title"> Barber <?php echo $barber ['barber_name'];?></h5>
                        <p class="card-text">Hi our customer, Have a nice dayy </p>
                    </div>
                </div>
                <?php } ?>

                <!-- </div>
                    <ul class="team_members col"> 
                        <li class="barber-info">
                            <div class="team_member">
                                <img src="design/team-1.jpg" alt="Team Member">
                            </div>
                        </li>
                        <li class="barber-info">
                            <div class="team_member">
                                <img src="design/team-2.jpg" alt="Team Member">
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>

        </div>
    </section>
    <!-- END BARBER SECTION --> 


    <!-- START CONTACT US SECTION --> 
    <section class="contact-section" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <!-- Business Information -->
                    <div class="contact-info">
                        <h2>Get in touch with us today!</h2>
                        <h2 style=" font-size:20px; color: white; text-shadow: 0px 2px 2px black;" >Twin & Dad Barbershop is the top 3 barbershop based in Kelantan</h2>
                        <a href="https://goo.gl/maps/XdmGpwy6BZKyj66U6">  
                            <i class="fa fa-map-marker" style="font-size:30px; font-style:verdana; color:red; text-shadow:2px 2px 2px white;" 
                            aria-hidden="true"><h2 style=" font-size:20px; color: white; text-shadow: 0px 2px 2px black;"> Twin & Dad Barbershop S/20 no 6447-F, Jalan Telipot 15150 Kota Bharu Kelantan</h2>
                            </i>
                        </a>  
                        <div class="row mx-auto pt-3">
                            <a href="https://www.facebook.com/twinanddad.barbershop">
                                <i class="fa fa-facebook-square" 
                                    aria-hidden="true" 
                                    style="font-size:30px; color: blue; text-shadow:2px 2px 2px white;"> Twin & Dad Barbershop</i>
                            </a>
                            <br> <br>
                            <a href="https://chat.whatsapp.com/601121828562">
                                <i class='fa fa-whatsapp green-color' 
                                    aria-hidden="true" 
                                    style="font-size:30px; color:#90ee90; text-shadow:2px 2px 4px #000000;"> 011-39183821 </i>
                            </a>
                            <br> <br>
                            <a href="https://instagram.com/twinanddad.barbershop?igshid=YmMyMTA2M2Y=">
                                <i class='fa fa-instagram' 
                                    aria-hidden="true" 
                                    style="font-size:30px; color:white; text-shadow:2px 2px 4px red;"> twinanddad.barbershop </i>
                            </a>
                            <br><br>
                            <a href="https://mail.google.com/mail/u/0/#inbox">
                                <i class='fa-regular fa fa-envelope-o'
                                    aria-hidden="true" 
                                    style="font-size:30px; color: white;"> hr.twinanddadbarbershop@gmail.com
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Us Form -->
                <div class="col-lg-6 sm-padding">
                    <div class="container text-light contact-info pt-2 h2" style="font-size: 20px;" >
                        <h2>Business Hours</h2>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Sunday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Monday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Tuesday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Wednesday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Thursday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Friday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">Closed </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="p-1">Saturday</div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">12:00 PM - 9:30 PM</div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT US SECTION --> 

</html>

    <!-- PHP INCLUDES -->
    <?php
        include "includes/footer.php";
    ?>
