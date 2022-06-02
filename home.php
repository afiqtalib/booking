<!-- PHP INCLUDES -->
<?php
    include "connect.php";
    include "includes/header.php";
    include "includes/navbar.php";
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

            <div class="bg-text card-header">
                <span class="overlay-text text-start">
                    Welcome to Twin & Dad Barbershop
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
        <!-- <div class="home-section-container">
            <img src="design/barbers-1.jpg" alt="barbers" style="width: 100%;">
                <div class="content">
                       
                </div>
  <img src="design/barbers-1.jpg" alt="Snow" style="width:100%;">
  <div class="centered">
      <span class="overlay-text">It's Not Just a Haircut, It's an Experience.
          <br>
          Our Booking Policy
          <br>
          1) Just 3 barbers only set in booking system
          <br>
          2) 4 barbers are available for customer walk-in. So you can walk-in if not available in system
      </span>
</div> -->

                    <!-- BOOKING BUTTON -->
                    <!-- <button id="app_submit" 
                        class="default_btn" 
                        type="submit">Make Booking
                    </button> -->
        <!-- </div>  -->
    </section>

    <!-- BOOKING SECTION -->

    <!-- <section class="book_section" id="booking">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="booking.php" method="post" id="booking_form" class="form-horizontal booking_form">
                        <div class="book_content">
                            <h2 style="color: white;">Make booking</h2>
                            <p style="color: #999;">
                                Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's and boys hair.
                            </p>
                        </div>

                        <!-- SUBMIT BUTTON -->

                        <!-- <button id="app_submit" class="default_btn" type="submit">
                            Make Booking
                        </button>

                    </form>
                </div>
            </div>
        </div> -->
    <!--</section> -->

    <!-- SERVICES SECTION --> 
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
            <h3>Our Services</h3>
                <!-- <h2>OUR SERVICES</h2> -->
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

        </div>
    </section>
    <!-- END SERVICES SECTION --> 

    <!-- BARBER SECTION --> 
    <section class="barber-section" id="barber">
    <div class="container">
        <div class="section_heading ">
        <h3>Trendy Salon</h3>
            <h2>OUR BARBERS</h2>
        </div>
        <div class="row">
            <div class="card col" style="width: 100%;">
                <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Barber Zaim</h5>
                    <p class="card-text">Barber Expertise</p>
                </div>
            </div>

            <div class="card col" style="width: 100%;">
                <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Barber Roy</h5>
                    <p class="card-text">Barber Expertise</p>
                </div>
            </div>
            <div class="card col" style="width: 100%;">
                <img src="design/team-1.jpg" class="card-img-top" alt="Team Member">
                <div class="card-body">
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


    <!-- CONTACT US SECTION --> 

    <section class="contact-section" id="contactus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 sm-padding">
                        <div class="contact-info">
                            <h2>
                                Get in touch with us & 
                                <br>send us message today!
                            </h2>
                            <p> Twin & Dad Barbershop is the top 5 barbershop based in Kelantan
                            </p>
                            <h3>
                            Twin & Dad Barbershop S/20 no 6447-F, Jalan Telipot 
                            <br>
                            15150 Kota Bharu Kelantan                        
                            </h3>
                            <h4>
                                <span style = "font-weight: bold">Email:</span> 
                                hr.twinanddadbarbershop@gmail.com 
                                <br> 
                                <span style = "font-weight: bold">Phone:</span> 
                                +6011-39183821
                                <br>
                            </h4>
                        </div>
                    </div>
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
</html>
        <!-- END CONTACT US SECTION --> 

        <!-- PHP INCLUDES -->
        <?php
            include "includes/footer.php";

        ?>
