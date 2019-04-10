<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
?>
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

    <link rel="stylesheet" href="css/responsive/searchResultsStyle.css">

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
        <ul class="nav nav-tabs" role="tablist" style="position:relative;left:485px;width:770px;">
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

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/design2.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
    <section class="container">
      <h2>Our Agents: </h2>
      <p>Our agents are always ready to help youm and they are all  Experts!</p>

         <div class="trip_table_wdg">

               <?php
                       $dbh = @mysqli_connect($host,$user,$pwd,$db);
                       if (! $dbh)
                       {
                         die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                       }

                           $sql = "SELECT agents.AgtFirstName,agents.AgtLastName,agents.AgtBusPhone,agents.AgtEmail,agents.AgtPosition,agencies.AgncyCity FROM agents
                           INNER JOIN agencies ON agents.AgencyId = agencies.AgencyId";


                           if ($result = mysqli_query($dbh, $sql))
                           {
                             while ($row = mysqli_fetch_assoc($result))
                             {
                               print("<ul style=\"width:250px;\">");
                               foreach ($row as $col)
                               {
                                 print("<li>$col</li>");
                               }
                               print("<li><a>Call</a><a>Send Email</a></li>");//class=\"buy_now\" href=\"flightBooked.html\"

                               print("</ul>");
                             }
                             mysqli_free_result($result);

                           }


                       mysqli_close($dbh);
                     ?>


     </section>
    </div>
  </div>
    <!-- ***** Contact Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.php" target="_blank">Travel Experts team</a>
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="https://www.behance.net/"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                        <a href="https://slack.com/"><i class="fa fa-slack" aria-hidden="true"></i></a>
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


	<!--<script src="js/google-map/map-active.js"></script>
     Active JS -->
    <script src="js/active.js"></script>
     <!-- Validate JS -->
    <script src="js/validate.js"></script>
</body>

</html>
