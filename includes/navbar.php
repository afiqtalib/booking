
<!DOCTYPE html>
<html lang="en">
	
<!-- HEAD -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<meta name="description" content="Barbershop Booking Space">
	<meta name="author" content="Muhammad Afiq">
	<title></title>
   

    <style>
      /*** START HEADER TOP STYLE ***/

    * {
      margin: 0;
      font-family: verdana;
    }

    body {
      height: 85vh;
    }

    header{
      position: fixed;
      width: 100%;
      height: 80px;
      top: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 30px;
      z-index: 999;
      background-color: grey;
      box-sizing: border-box;
    }

    .nav img {
      float: left;
      width: 80px;
      height: 80px;
    } 

    /* .nav h1{
      position: relative;
      display: flex;
      font-size: 10;
      font-weight: 700;
      color: #daa520;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 2px;
      padding: 5px 150px;
    } */
    .nav ul {
      display: flex;
      align-items:center;
      float: right;
      position: relative;
      margin: 0;
      padding: 0;
      list-style-type: none;
      justify-content: flex-start;
    }
    
    .nav ul li {
      list-style: none;
    }

    .nav ul li a { 
      position: relative;
      margin: 0 2px;
      text-decoration: none;
      text-transform: uppercase;
      color: white;
      letter-spacing: 1px;
      font-weight: bold;
      padding: 5px 20px;
      line-height: 5px;
    }
    
    .nav ul li a.active,
    .nav ul li a:focus,
    .nav ul li a:hover {
      color: gold;
    }
    
    .logout {
      float: right ; 
      padding-right: 0px ;
    }
    /*** END HEADER TOP STYLE ***/
    </style>
</head>

<!-- HEADER SECTION -->
<header class="header_section">
    <div class="nav">
      <img src="design/logo-company.jpg" alt="Barbershop Logo">
          <!-- NAVBAR SECTION -->
                <ul class="bold">
                        <li><a href="home.php#home">HOME</a></li>
                        <li><a href="booking.php">Book</a></li>
                        <li><a href="home.php#service">Services</a></li>
                        <li><a href="home.php#barber">barber</a></li>
                        <li><a href="home.php#contactus">CONTACT</a></li>
                </ul>   
    </div>

      <div class="logout">
        <button><a class="btn btn-info" href="profile.php" >Profile</a></button>
        <button><a class="btn btn-light" href="logout.php">logout</a></button>
    </div>
</header>