<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/jpg">
    <title>ZRI Adventures</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">

        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"><img id="logoImg" src="image/logn.png" alt="" height="60px" width="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item submenu dropdown active">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experience</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="pack.php">Packages</a></li>
                            <li class="nav-item"><a class="nav-link" href="activity.php">Activities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>

    </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Booking</h2>
                    <ol class="breadcrumb" style="background-color: transparent; text-align: center;">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Packages</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <?php



            if (isset($_POST['name'])) {
                $idnew = $_POST['name'];
                //session_start();
                $_SESSION['type'] = " done";
            }



            ?>
           
            <div class="row">
                <div class="col-md-9">



                    <div class="errorOrSuccess" id="errorOrSuccess" style="display: none;"></div>






                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <p class="h4 mb-4" style="text-align:center; margin-top: -10%"><?php
                            if (isset($_POST['name']))
                                echo ("Book Your Experience - &nbsp;" . $idnew);
                            if (isset($_SESSION['nameTest'])) {
                                echo ("<div class='row justify-content-center'>
                                <div class='col-md-5'>
                                <div class='alert alert-success'><strong>Success!</strong> Your Message was sent successfully!! <br>
                                    We will contact you within next 24 hours.
                                     </div>
                                </div>
                                </div>");
                                session_destroy();
                            }
                            ?></p>
        <div class="row justify-content-center">
            <div class="col-md-5">

                <form action="bookForm.php" method="post">
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="testBooking.php" method="post">

                        <div class="errorOrSuccess" id="errorOrSuccess" style="display: none;"></div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <input type="text" name="name" id="defaultRegisterFormFirstName" maxlength="30" class="form-control" required placeholder="Your name">
                                <input type="text" name="typeName" hidden="true" require value="<?php echo $idnew; ?>">
                            </div>
                        </div>

                        <!-- E-mail -->
                        <input type="email" name="mail" id="defaultRegisterFormEmail" maxlength="35" class="form-control mb-4" required placeholder="Your E-mail">

                        <!-- Phone number -->
                        <input type="text" name="mobile" id="defaultRegisterPhonePassword" maxlength="10" class="form-control" required placeholder="Your Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        </small>

                        <div class="form-row mb-4">
                            <div class="col-md-4">
                                <!-- First name -->
                                <input type="number" name="pack" min="1" max="50" id="defaultRegisterFormFirstName" required class="form-control" placeholder="Pax"> <br>
                            </div>
                            <div class="col-md-8">
                                <!-- First name -->
                                <input type="date" name="date" id="defaultRegisterFormFirstName" required class="form-control">
                            </div>
                        </div>

                        <div style="margin-left: 2rem;" class="form-row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="select[]" value="Accommodation" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Accommodation</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="select[]" value="Transport" class="custom-control-input" id="customCheck2" name="example1">
                                <label class="custom-control-label" for="customCheck2">Transport</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="select[]" value="Food" class="custom-control-input" id="customCheck3" name="example1">
                                <label class="custom-control-label" for="customCheck3">Food</label>
                            </div>
                        </div>

                        <button class="btn btn-success my-4 btn-block" type="submit">Book Now</button>


                    </form>

            </div>
        </div>
    </div>



    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">

            <div id="footerLine" class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p style="color: #fff;" class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy; 2018 All rights reserved by ZRI Adventures- Designed by | <a href="mailto:ridwan@virgro.com">Ridwan Sameer</a> </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/ZRIadventures/"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/zri-adventures/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/zriadventures/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCy0EGslVbeP-XNTcHr6F5vg?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293962-d16744429-Reviews-ZRI_Adventures-Colombo_Western_Province.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21690-2.png"/></a><script async src="https://www.jscache.com/wejs?wtype=socialButtonIcon&amp;uniq=955&amp;locationId=16744429&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $("#btnSubmit").on('click', function() {
            //showBarLoader();
            $("#errorOrSuccess").empty();
            $("#errorOrSuccess").hide();
            $.ajax({
                url: "packageemail.php",
                type: 'post',
                data: $('#form_contactFrom').serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $("#errorOrSuccess").empty();
                    $("#errorOrSuccess").html(data[0].message);
                    $("#errorOrSuccess").show();
                    //hideBarLoader();
                    if (data[0].code === 1) {
                        $('#form_contactFrom')[0].reset();
                    }
                },
                error: function(request) {
                    //hideBarLoader();
                    console.log(request);
                }
            });
        });
    </script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d9f383ffbec0f2fe3b916fe/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>