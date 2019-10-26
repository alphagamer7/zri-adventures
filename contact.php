
<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/jpg">
    <title>ZRI Adventures</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" href="vendors/linericon/style.css"> -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!-- =========fonts============-->
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Farro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <style>
        body {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #003366;
        }


        #contact {
            background: #F9F9F9;
            padding: 2rem 0 0 1rem;
            margin: 5% 5% 5% 5%;
            border-radius: 2rem;
            -webkit-box-shadow: 9px 12px 18px 1px rgba(30,30,30,0.82); 
            box-shadow: 9px 12px 18px 1px rgba(30,30,30,0.82);

        }
    </style>

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
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experience</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="pack.php">Packages</a></li>
                            <li class="nav-item"><a class="nav-link" href="activity.php">Activities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>

    </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Contact Us</h2>
                <ol class="breadcrumb" style="background-color: transparent;">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Contact Area =================-->


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="my-auto">
                        <h2 class="mb-4" style=" font-weight: 600;font-size: 2rem; text-transform:uppercase; "> Contact Information </h2>

                        <ul class="fa-ul mb-4 ml-0" style=" font-weight: 400;font-size: 1rem; line-height: 1.7rem;">
                            <li id="mail-address">
                                <i class="fas fa-envelope-open mr-2 contact-icons"></i>info@zriadventures.com</a>
                            </li>
                            <li>
                                <i class="fas fa-mobile-alt mr-2 contact-icons"></i>+94 (77) 020 7079
                            </li>
                            <li>
                                <i class="fas fa-mobile-alt mr-2 contact-icons"></i>+94 (77) 894 1243
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>32, Joseph Lane<br>Colombo-04
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--=============Contact form=========================-->


    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
    
        <div class="container-contact3" style="padding: 5rem 0 5rem">
        
            <div class="wrap-contact3">
                
                <form action="test.php" method="post" class="contact3-form validate-form">
                <?php
                            if (isset($_POST['name']))
                                echo ("Book Your Experience - &nbsp;" . $idnew);
                            if (isset($_SESSION['nameTest'])) {
                                echo ("<div class='alert alert-success'><strong>Success!</strong> Your Message was sent successfully!! 
                                </div>");
                                session_destroy();
                            }
                            ?>
                    <span class="contact3-form-title">
                        Drop A Message
                    </span>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" maxlength="25" name="name" placeholder="Your Name">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" maxlength="50" name="email" placeholder="Your Email">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Phone is required">
                        <input class="input3" type="tel" name="mobile" placeholder="Your Phone">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Message is required">
                        <textarea class="input3" name="msg" placeholder="Your Message"></textarea>
                        <span class="focus-input3"></span>
                    </div>

                    <div class="container-contact3-form-btn">
                        <button id="contactBtn" class="contact3-form-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===========contact form area=======================-->



    <!--================Contact Area =================-->



    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">

            <div id="footerLine" class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p style="color:#fff" class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy; 2018 All rights reserved by ZRI Adventures- Designed by | <a href="mailto:ridwan@virgro.com">Ridwan Sameer</a> </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/ZRIadventures/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/zri-adventures/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/zriadventures/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCy0EGslVbeP-XNTcHr6F5vg?view_as=subscriber"><i class="fab fa-youtube"></i></a>
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293962-d16744429-Reviews-ZRI_Adventures-Colombo_Western_Province.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21690-2.png"/></a><script async src="https://www.jscache.com/wejs?wtype=socialButtonIcon&amp;uniq=955&amp;locationId=16744429&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                </div>
            </div>
        </div>
    </footer>
    <!-- <i class="fa fa-facebook"></i> -->
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="js/jquery-3.2.1.min.js"></script> -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/custom.js"></script>

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



    <!--==========JS Section===============-->

    <script type="text/javascript">
        $("#btnSubmit").on('click', function() {
            //showBarLoader();
            $("#errorOrSuccess").empty();
            $("#errorOrSuccess").hide();
            $.ajax({
                url: "sendEmail.php",
                type: 'post',
                data: $('#form_contactFrom').serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $("#errorOrSuccess").empty();
                    $("#errorOrSuccess").php(data[0].message);
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


    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous">
    </script>



<?php session_abort(); ?>

</html>