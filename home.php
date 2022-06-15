<!-- PHP INCLUDES -->
<?php
    session_start();
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
?>

<!-- Main Page Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<html>

    <!-- HOME SECTION --> 
    <section class="home-section"id="home">
        <div class="home-section-container">
            <div class="bg-image">
                <img src="design/barbers-1.jpg" alt="Snow" style="width:100%;">
            </div>

            <div class="bg-text card-header"> Hi, 
            <?php echo $_SESSION['username'];?>

                <span class="overlay-text text-start">
                    - Welcome to Twin & Dad Barbershop 
                    <br>
                    <br>
                    It's Not Just a Haircut, It's an Experience.
                    <br>
                    - Quality Over Quantity -
                    <br>
                    Our Booking Policy :
                    <br>
                    1) Just 3 barbers only set in booking system
                    <br>
                    2) 4 barbers are available for customer walk-in. So you can walk-in if not available in system
                    <br>
                </span>
                <div class="d-grid gap-2 mt-5">
                    <a class="btn btn-light btn-lg" href="booking.php">BOOK NOW</a>
                </div>
                
            </div>
        <div>
    </section>

    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">


        <div class="flex-container">
            <div class="section_heading">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Pricing</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php
                    $sql = "SELECT * FROM services";
                    $result = mysqli_query($conn, $sql);
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                ?>

                <div class="col-lg-4 col-md-6 sm-padding grid-item">
                    <div class="price_wrap">
                        <ul class="price_list">
                            <?php
                                foreach ($row as $services)  
                                {
                                    ?>
                                        <li>
                                            <h4><?php echo $services['service_name'] ?></h4>
                                            <p><?php echo $services['service_name'] ?></p>
                                            <span class="price">RM<?php echo $services['service_price'] ?></span>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
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
            <!-- <h2>OUR SERVICES</h2> -->
        </div>

            <div class="row">
            <h3>Mens Grooming Services</h3>

                <?php
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);
                $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($row as $services)  {
                ?>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <ul class="price_list">
                                <li>
                                    <h5><?php echo $services['service_name'] ?></h5>
                                    <p><?php echo $services['service_desc'] ?></p>
                                    <span class="price">RM<?php echo $services['service_price'] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                <img src="design/hairline.jpg" alt="hairstyle" style="width:100%" >
            </div>
        </div>
    </section>
    <!-- END SERVICES SECTION --> 

    <!-- START BARBER SECTION --> 
    <section class="barber-section" id="barber">
        <div class="container">
            <div class="section_heading ">
                <h3>Trendy Salon</h3>
                <h2>OUR BARBERS</h2>
            </div>
            <?php
            $sql = "SELECT * FROM barbers";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($row as $barber)
            ?>

            <div class="row">
                <div class="card col m-4 border-secondary" style="width: 100%;">
                    <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php $barber ['barber_name'];?></h5>
                        <p class="card-text">Barber Expertise</p>
                    </div>
                </div>

                </div>
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
                </div>
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
                        <p> Twin & Dad Barbershop is the top 5 barbershop based in Kelantan</p>
                        <address>Twin & Dad Barbershop S/20 no 6447-F, Jalan Telipot 15150 Kota Bharu Kelantan</address>
                        <h4>
                            <i class="fa fa-envelope-o white">
                            <span style = "font-weight: bold"> 
                            </span> 
                            </i>
                            <span style = "font-weight: bold">Email</span> 
                            hr.twinanddadbarbershop@gmail.com
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +6011-39183821
                            <br>
                        </h4>
                        
                        <!-- Business Hours -->
                        <div class="container card text-white bg-secondary mb-3">
                            <div class="row">
                                <div class="col-10 text-center card-header">Business Hours</div>
                                <div class="col-4 card-text">Sunday<br>Monday<br>Tuesday<br>Wednesday<br>Thursday<br>Friday<br>Saturday</div>
                                <div class="col-6 card-text">12:00PM - 9:30PM<br>12:00PM - 9:30PM<br>12:00PM - 9:30PM<br>12:00PM - 9:30PM<br>12:00PM - 9:30PM<br>Close<br>12:00PM - 9:30PM</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Us Form -->
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="35" rows="4" class="form-control message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="button" id="contact_send" class="btn btn-secondary">Send Message</button>
                                    <!-- <button id="contact_send" class="default_btn" >Send Message</button> -->
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
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
    }   
    else{
        header("Location: index.php");
        exit();
    }
    ?>
