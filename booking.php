<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();?>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+967 77777777</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>hospital@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">

        <?php
        
        if (isset($_GET["log_out"])) {
            if ($_GET["log_out"] == "1") {
                session_unset();
                session_destroy();
            }
        }
        

        
        ?>

                    

                    <a href="booking.php?log_out=1" class="btn btn-primary py-md-1 px-md-3 mt-2"style="border-radius : 20px; margin-right:10px;">LOG OUT</a>
                    <a href="login.php" class="btn btn-primary py-md-1 px-md-3 mt-2"style="border-radius : 20px">LOG IN</a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

         <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="result/Admin/index.php" class="nav-item nav-link">Dashboard</a>
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="team.php" class="nav-item nav-link">Team</a>
                        <a href="car.php" class="nav-item nav-link">Cars</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Search Start -->

    <!-- Search End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->

    <?php




    if (isset($_GET["id"])) {

        $sql = "select * from cars where id ='" . $_GET["id"] . "'";
        $link = mysqli_connect('localhost', 'root', '', 'project');
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {


    ?>
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5"><?php echo $row["name"] ?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="img/<?php echo $row["image"] ?>" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2"><strong>$</strong><?php echo $row["price"] ?></h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor
                        voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum
                        et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur
                        takimata eirmod, dolores takimata consetetur invidunt</p>
                    <div class="d-flex pt-1">
                        <h6>Share on:</h6>
                        <div class="d-inline-flex">
                            <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>MODEL:<?php echo $row["model"] ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>TRANSMISSION:<?php echo $row["transmission"] ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>MILAGE:<?php echo $row["milage"] ?>/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
    <!-- Detail End -->

    <?php
    
    $exception="";

    if (isset($_SESSION["logged_in"])) {

        if ($_SESSION["logged_in"]=="true"){

            $link = mysqli_connect('localhost', 'root', '', 'project');
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["first_name"]) and isset($_POST["last_name"]) and isset($_POST["email"])) {
                    // $sql = "INSERT INTO `car_booking` (`id`, `first_name`, `last_name`, `email`, `mobile`, `pickup_location`, `pickup_date`, `adult`, `special_request`, `drop_location`, `pickup_time`, `child`, `payment`)VALUES (NULL,'" . $_POST["first_name"] . "','" . $_POST["last_name"] . "','" . $_POST["email"] . "','" . $_POST["mobile"] . "','" . $_POST["pickup_location"] . "','" . $_POST["pickup_date"] . "','" . $_POST["adult"] . "','" . $_POST["special_request"] . "','" . $_POST["drop_location"] . "','" . $_POST["pickup_time"] . "','" . $_POST["child"] . "','" . $_POST["payment"] . "');";
                    $sql = "INSERT INTO `car_booking` (`id`, `first_name`, `last_name`, `email`, `mobile`, `pickup_location`, `pickup_date`, `adult`, `special_request`, `drop_location`, `pickup_time`, `child`, `payment`) VALUES (NULL,'" . $_POST["first_name"] . "','" . $_POST["last_name"] . "','" . $_POST["email"] . "','" . $_POST["mobile"] . "','" . $_POST["pickup_location"] . "','" . $_POST["pickup_date"] . "','" . $_POST["adult"] . "','" . $_POST["special_request"] . "','" . $_POST["drop_location"] . "','" . $_POST["pickup_time"] . "','" . $_POST["child"] . "','" . $_POST["payment"] . "');";
                    $connect = mysqli_query($link, $sql);
                    // if (mysqli_query($link, $sql)) {
                    //     header("Location:index.php");
                    // }
                }
            }
        }
        
        
        
    }
    else {
    $exception ="please log in";  
    }
    
    
    
    





    ?>

    <!-- Car Booking Start -->
    <form action="booking.php" method="post">
        <div class="container-fluid pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Personal Detail</h2>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="First Name"
                                        name="first_name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Last Name" name="last_name"
                                        required="required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your Email" name="email"
                                        required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Mobile Number"
                                        name="mobile" required="required">
                                </div>
                            </div>
                        </div>
                        <h2 class="mb-4">Booking Detail</h2>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                <select id="pick" class="custom-select px-4" style="height: 50px;" name="pickup_location">
                                        <option id="pick" value=""selected>Select the pickup location</option>
                                        <option id="pick" value="sanaa">Sana'a</option>
                                        <option id="pick" value="taiz">Taiz</option>
                                        <option id="pick" value="ibb">Ibb</option>
                                        <option id="pick" value="dhamar">Dhamar</option>
                                        <option id="pick" value="mareb">Mareb</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                <select id="drop" class="custom-select px-4" style="height: 50px;" name="drop_location">
                                        <option id="drop" value=""selected>Select the Drop location</option>
                                        <option id="drop" value="sanaa">Sana'a</option>
                                        <option id="drop" value="taiz">Taiz</option>
                                        <option id="drop" value="ibb">Ibb</option>
                                        <option id="drop" value="dhamar">Dhamar</option>
                                        <option id="drop" value="mareb">Mareb</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" name="pickup_date"
                                            class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                                            data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <div class="time" id="time2" data-target-input="nearest">
                                        <input type="text" name="pickup_time"
                                            class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                            data-target="#time2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select id="adult" class="custom-select px-4" style="height: 50px;" name="adult">
                                        <option id="adult" value=""selected>Select number of Adult</option>
                                        <option id="adult" value="0">No Adult</option>
                                        <option id="adult" value="1">1 Adult</option>
                                        <option id="adult" value="2">2 Adults</option>
                                        <option id="adult" value="3">3 Adults</option>
                                        <option id="adult" value="4">4 Adults</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <select id="clild" class="custom-select px-4" style="height: 50px;" name="child">
                                        <option id="clild" value="" selected>Select number of Child</option>
                                        <option id="clild" value="0">No Child</option>
                                        <option id="clild" value="1">1 Child</option>
                                        <option id="clild" value="2">2 Childs</option>
                                        <option id="clild" value="3">3 Childs</option>
                                        <option id="clild" value="4">4 Childs</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" name="special_request" rows="3"
                                    placeholder="Special Request" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-secondary p-5 mb-5">
                            <h2 class="text-primary mb-4">Payment</h2>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" value="Paypal"
                                        id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" value="DirectCheck"
                                        id="directcheck">
                                    <label class="custom-control-label" for="directcheck">Direct Check</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" value="Bank"
                                        id="bank">
                                    <label class="custom-control-label" for="bank">Bank</label>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary py-3" type="submit">Buy Now</button>
                            <h1 style="z-index :8888; color:white; "><?php echo "$exception";?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- Car Booking End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>14th October street , Sana'a , YEMEN</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+967 777777777</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>hospital@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus officiis quidem quam asperiores et dolorem neque cum! Sit, officiis id.</p>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
        <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
            <p class="mb-2 text-center text-body">&copy; <a href="#">ROYAL CARS</a>. All Rights Reserved.</p>
    <?php

    $sql = "select name from team";
    $link = mysqli_connect('localhost', 'root', '', 'project');
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <p class="m-0 text-center text-body">Made by <a href="#"><?php echo $row["name"] ?></a></p>
        <?php
        }
        ?>
        </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>