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
                    <br>
                    Our Booking Policy :
                    <br>
                    1) Just max 3 barbers only set in booking system
                    <br>
                    2) 4 barbers are available for customer walk-in. So you can walk-in if not available in system
                    <br>
                </span>
                <div class="d-grid gap-2 mt-5">
                    <a class="btn btn-primary btn-lg" href="booking.php">BOOK NOW</a>
                </div>
                
            </div>
        <div>
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
                <div class="card m-3 col " style="width: 18rem;">
                    <img src="design/haircolor.jpg" class="card-img-top" alt="hairstyle">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hair Style</h5>
                        <p class="card-text">RM 20 <span class="dot-separator">.</span> 60 min</p>
                    </div>
                </div>

                <div class="card m-3 col" style="width: 18rem;">
                    <img src="design/haircolor.jpg" class="card-img-top" alt="hairstyle">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hair Style</h5>
                        <p class="card-text">RM 20 <span class="dot-separator">.</span> 60 min</p>
                    </div>
                </div>

                <div class="card m-3 col " style="width: 18rem;">
                    <img src="design/haircolor.jpg" class="card-img-top" alt="hairstyle">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hair Style</h5>
                        <p class="card-text">RM 20 <span class="dot-separator">.</span> 60 min</p>
                    </div>
                </div>

                <div class="card m-3 col " style="width: 18rem;">
                    <img src="design/haircolor.jpg" class="card-img-top" alt="hairstyle">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hair Style</h5>
                        <p class="card-text">RM 20 <span class="dot-separator">.</span> 60 min</p>
                    </div>
                </div>
            </div>

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
            // $stmt = $con->prepare("Select * from service_categories");
            //     $stmt->execute();
            //     $categories = $stmt->fetchAll();
            
            // // create a prepared statement
            // $stmt = $conn->prepare("SELECT * FROM barbers");
            // // bind parameters for markers 
            // $stmt->bind_param();
            // // execute query 
            // $result = $stmt->execute();
            // $mysqli = new mysqli("localhost", "root", "", "bbs_db");

            // $stmt = $mysqli->prepare("SELECT * FROM barbers where barber_un=?");

            // foreach($barbers as $barber_un){

            //     if($stmt->prepare("SELECT barber_name FROM barbers WHERE barber_un=?")) {
            
            //         $stmt->bind_param('barber_roy',$barber_un);
            
            //         $stmt->execute();
            
            //         $stmt->bind_result($barber_name);
                        
            //         while($stmt->fetch()) {
            //             echo $barber_name;
            //         }
            //         $stmt->close();
            //     }
            // }

            // if ($result ==  true) {

            //     echo "</br>New record created Successfully";

            // }

            // $stmt->close();
            ?>

            <div class="row">
                <div class="card col m-4 border-secondary" style="width: 100%;">
                    <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title">Barber Zaim</h5>
                        <p class="card-text">Barber Expertise</p>
                    </div>
                </div>

                <div class="card col m-4 border-secondary" style="width: 100%;">
                    <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title">Barber Roy</h5>
                        <p class="card-text">Barber Expertise</p>
                    </div>
                </div>
                <div class="card col m-4 border-secondary" style="width: 100%;">
                    <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title">Barber Danish</h5>
                        <p class="card-text">Barber Expertise</p>
                    </div>
                </div>
                </div>
                    <!-- <ul class="team_members row"> 
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
                        <li class="barber-info">
                            <div class="team_member">
                                <img src="design/team-3.jpg" alt="Team Member">
                            </div>
                        </li>
                    </ul> -->
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
