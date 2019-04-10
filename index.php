<?php
  session_start();
	include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TRAVEL EXPERTS - DIRECTORY &amp; LISTING</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <!-- Subscribe or register CSS -->
    <link rel="stylesheet" href="css/responsive/subscribeStyle.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                            <!-- Nav -->
                            <div class="collapse navbar-collapse" id="dorneNav">
                                <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#aboutus">About us <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#cities">Cities you must see</a>
                                            <a class="dropdown-item" href="#destinations">Featured destinations</a>
                                            <a class="dropdown-item" href="#restaurants">Featured Restaurants</a>
                                            <a class="dropdown-item" href="#events">Featured events</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="selectAgent.php">Our Agents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                                <div class="dorne-signin-btn">
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" >Sign in  or Register</a>
                                </div>
                                <div class="dorne-add-listings-btn">
                                  <!-- weather widget start -->
                                  <a target="_blank" href="https://www.booked.net/weather"><img src="https://w.bookcdn.com/weather/picture/23_30502_1_1_3498db_250_2980b9_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=569&anc_id=32147"  alt="booked.net"/></a><!-- weather widget end -->
                                  </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Sign in or register begin ***** -->
    <div id="id01" class="modal">
				<span onclick="document.getElementById('id01').style.display='none';document.getElementById('myForm').reset();document.getElementById('myForm1').reset();" class="close" title="Close Modal">&times;</span>
        <ul class="nav nav-tabs" role="tablist" style="position:relative;left:450px;width:620px;">
          <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#signIn">Sign In</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#signUp">Sign Up</a>
             </li>

        </ul>
        <div class="tab-content" style="position:relative;left:295px;width:70%;">
          <div id="signIn" class="container tab-pane active">
              <form class="modal-content" id="myForm" method="get" action="checklogin.php">
                    <div class="container">
                        <h1>Sign In</h1>
            						<p>Please fill in this form to open your account.</p>
            						<hr>
            						<label for="userName"><b>User name</b></label>
            						<input type="text" placeholder="Enter User Name" name="userName" required>

            						<label for="psw"><b>Password</b></label>
            						<input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="user"><b>User</b></label></br>
                        <select class="custom-select" name="accountSelect" style="width: 50%;background-color: #EEEAEA;">
                            <option style="font-size: 18pt;" selected>I am a/an</option>
                            <option>Customer</option>
                            <option>Agent</option>
                            <option>Supplier</option>
                        </select>

                        </br></br>

                        <button type="submit" class="signinbtn">Sign In</button>

                    </div>
                </form>
            </div>
        <div id="signUp" class="container tab-pane fade">
				<form class="modal-content" id="myForm1" method="get" action="/insertAgent.php"><!-- tbd-->
          <div class="container">
        						<h1>Sign Up</h1>
        						<p>Please fill in this form to create an account.</p>
        						<hr>

                    <label for="fname"><b>First name</b></label>
        						<input type="text" placeholder="Enter first name" name="AgtFirstName" required>

                    <label for="lname"><b>Last name</b></label>
        						<input type="text" placeholder="Enter Last name" name="AgtLastName" required>

                    <label for="phonenumber"><b>Phone number</b></label>
        						<input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Enter phone number" name="AgtBusPhone" required>

        						<label for="email"><b>Email</b></label>
                    <!--<p class="formdesc" id="parapostal">The email adress format should be abc@fgh.xyz</p>-->
        						<input type="email" placeholder="Enter Email" name="AgtEmail"  required><!--onfocus="showDesc('parapostal');"-->

        						<label for="psw"><b>Password</b></label>
        						<input type="password" placeholder="Enter Password" name="password" required>

        						<label for="psw-repeat"><b>Repeat Password</b></label>
        						<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        						<p>By creating an account you agree to our <a href="TermsAndConditions.pdf" style="color:dodgerblue">Terms & Privacy</a>.</p>

        						<div class="clearfix">
          							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          							<button type="submit" class="signupbtn">Sign Up</button>
						        </div>
					</div>
				</form>
    </div>
  </div>
  </div>

    <!-- ***** Sign in or register End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/design2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2><label id="lblGreetings"></label> ... Discover the World ...</h2>
                        <h4>This is the best guide to explore and more ...</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Packages</a>
                            <!--<a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>-->
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="/searchResults.php" method="get">
                                    <select class="custom-select" name="custom-select1">
                                        <option selected>Your Destinations</option>
                                        <?php
                                              $dbh = @mysqli_connect($host,$user,$pwd,$db);
                                              if (! $dbh)
                                              {
                                                die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                                              }

                                              $sql = "select distinct(Destination) from bookingdetails where Destination <> '' ";
                                              if ($result = mysqli_query($dbh, $sql))
                                              {

                                                while ($row = mysqli_fetch_assoc($result))
                                                {

                                                  foreach ($row as $col)
                                                  {
                                                    print("<option>$col</option>");
                                                  }
                                                }

                                                mysqli_free_result($result);
                                              }

                                              mysqli_close($dbh);
                                        ?>
                                    </select>
                                    <select class="custom-select" name="custom-select2">
                                    <option selected>All Classes</option>
                                      <?php
                                            	$dbh = @mysqli_connect($host,$user,$pwd,$db);
                                            	if (! $dbh)
                                            	{
                                            		die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                                            	}

                                            	$sql = "SELECT classes.ClassName FROM classes;";

                                            	if ($result = mysqli_query($dbh, $sql))
                                            	{

                                            		while ($row = mysqli_fetch_assoc($result))
                                            		{

                                            			foreach ($row as $col)
                                            			{
                                            				print("<option value='$col' >$col</option>");
                                            			}
                                            		}

                                            		mysqli_free_result($result);
                                            	}

                                            	mysqli_close($dbh);
                                            ?>

                                    </select>

                                    <select class="custom-select" name="custom-select3">
                                        <option selected>Price Range</option>
                                        <option value="100.0000-499.0000">$100 - $499</option>
                                        <option value="500.0000-999.0000">$500 - $999</option>
                                        <option value="1000.0000-4999.0000">$1000 - $4999</option>
                                        <option value="5000.0000-9999.0000">$5000 - $9999</option>
                                        <option value="10000.0000-100000.0000">$10000 - and more</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="https://www.linkedin.com/" target = "_blank"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="https://twitter.com/?lang=en" target = "_blank"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="https://www.facebook.com/" target = "_blank"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                <a href="https://slack.com/" target = "_blank"><i class="fa fa-slack" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="https://www.google.com/maps/search/Hotels/">
                                            <h6>Hotels</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="https://www.google.com/maps/search/Restaurants/">
                                            <h6>Restaurants</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="https://www.google.com/maps/search/Shopping/">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="https://www.google.com/maps/search/Beauty/">
                                            <h6>Beauty &amp; Spa</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="https://www.google.com/maps/search/Movie%20Theater">
                                            <h6>Movie Theater</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section id="aboutus" class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="about-content text-center">
                  </br></br></br>
                  <h2>Discover the World with <br><span>Travel Experts</span></h2>
                  <p><b>Quality and service</b></p>
                  <p>We, at Travel Experts, are committed to quality and service at every step of your journey. We closely monitor client satisfaction and seek new ways to exceed your expectations. </p>
                  </br><p><b>A personal touch</b></p>
                  <p> We make it a practice to greet our clients personally and review your entire trip. You will know your personal travel consultant both by name and by face.</p>
                  </br><p><b>Friendly and knowledgeable staff</b></p>
                  <p>Since 2000, we’ve been creating unforgettable travel experiences. Our staff has extensive, firsthand knowledge and are passionate about what they do.</p>
                  </br><p><b>Save time and effort</b></p>
                  <p> By choosing Travel Experts, you can save time and hassle by booking all of your itinerary services directly with a specialised local agency.</p>
                  </br><p><b>Tailor-made holidays</b></p>
                  <p>Our packages can be tailored or built completely from scratch to suit your needs. Contact us with your interests. </p>
                  </br><p><b>You’re in good hands</b></p>
                  <p>Staff is on call 24/7 to handle any unforeseen situations at any time during your journey.  We respond to regular emails and voicemail within 24 hours. </p>
                  </br><p><b>Legitimacy</b></p>
                  <p>Travel Experts is insured, fully licensed and approved by local authorities. As members of various travel industry associations, we are held to a high level of standards and practices. Read our reviews online. </p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section id="cities" class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Cities you must see</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/bg-img/editor-1.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">New York</a>
                                <a href="#">United States</a>
                            </div>
                            <div class="add-more">
                                <a href="https://en.wikipedia.org/wiki/New_York_City">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/bg-img/editor-2.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Barcelona</a>
                                <a href="#">Spain</a>
                            </div>
                            <div class="add-more">
                                <a href="https://en.wikipedia.org/wiki/Barcelona">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/bg-img/editor-3.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">paris</a>
                                <a href="#">France</a>
                            </div>
                            <div class="add-more">
                                <a href="https://en.wikipedia.org/wiki/Paris">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Destinations Area Start ***** -->
    <section id="destinations" class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured destinations</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-1.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Ibiza</h5>
                                    <p>Party</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-2.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Paris</h5>
                                    <p>Luxury</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-3.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Lake Como</h5>
                                    <p>Spectacular</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-4.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Greece</h5>
                                    <p>Sunny</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-5.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Norway</h5>
                                    <p>All Year round</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Destinations Area End ***** -->

    <!-- ***** Features Restaurant Area Start ***** -->
    <section id="restaurants" class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured Restaurants</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-6.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Martha’s bar</h5>
                                    <p>London</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-7.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.5</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Delux Restaurant</h5>
                                    <p>Paris</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-8.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.2</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Jim’s corner  </h5>
                                    <p>Madrid</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-9.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.7</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>tower Risto bar</h5>
                                    <p>Sydney</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-10.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.8</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Pizzeria venezia</h5>
                                    <p>Hong Kong</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section id="events" class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured events</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-1.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26  JUNE</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Jazz Concert</h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-2.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">14  AUG</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>DeeJay in the house</h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-3.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">16  JAN</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Theatre Night outside</h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-4.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26  APR</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Wine tasting</h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-5.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">12  SEP</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>New Moon Party</h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-6.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">22  MAR</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Happy hour at  </h5>
                            <h6>London</h6>

                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.php" target="_blank">Travel Experts team</a>

                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                        <a href="https://slack.com/"><i class="fa fa-slack" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script>
        var myDate = new Date();
        var hrs = myDate.getHours();

        var greet;

        if (hrs < 12)
            greet = 'Good Morning';
        else if (hrs >= 12 && hrs <= 17)
            greet = 'Good Afternoon';
        else if (hrs >= 17 && hrs <= 24)
            greet = 'Good Evening';

        document.getElementById('lblGreetings').innerHTML = greet;

        /*var validate = function(myform){
				var myemail = myform.email;
				var regx = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@(([a-z0-9]+[-])+[a-z0-9]+\.?)+[a-z]{2,}$/i;
				if (!regx.test(myemail.value))
				{
					//alert("invalid email format");
					return false;
				}
}*/

function showDesc(paraId)
			{
					var paras = document.getElementsByClassName("formdesc");
					for (var i = 0; i < paras.length; i++)
					{
						paras[i].style.visibility = "hidden";
					}

					document.getElementById(paraId).style.visibility = "visible";
			}
    </script>
 <style>
			.formdesc {
				visibility : hidden;
			}


		</style>
</body>

</html>
