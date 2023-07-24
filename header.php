<!DOCTYPE html>
<html lang="en">
    <?php session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords"
            content="Seraphic Home Foundation, charity, help, homeless, helpless, donation,arms giving" />
        <!-- OpenGraph -->
        <meta property="og:url" content="https://seraphicfoundation.org/" />
        <meta property="og:title" content="Seraphic Home Foundation" />
        <meta property="og:description" content="Seraphic Home Foundation Website" />
        <meta property="og:image" content="image/logo4.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@bukan_moses" />
        <meta name="twitter:creator" content="@bukan_moses" />
        <meta name="twitter:title" content="Seraphic Home Foundation" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="image/logo4.png" />
        <meta name="theme-color" content="#030350" />
        <meta name="description" content="Seraphic Home Foundation">

        <title>Seraphic Home Foundation</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/query.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
        <link rel="stylesheet" href="fontawesome-free-6.1.1/css/all.css">
        <link rel="icon" type="image" href="image/logo1.png">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
            id="bootstrap-css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

        <header>
            <div class="container-fluid top-header">
                <div class="container">
                    <div class="row p-1">
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <div class="top-contact   d-flex flex-row justify-content-start">
                                <div>
                                    <h6 class="top_contect text-white pr-5">
                                        <a href="">
                                            <i class="fa-sharp fa-solid fa-map pr-2"></i>
                                            Lagos, Nigeria.
                                        </a>
                                    </h6>
                                </div>
                                <div>
                                    <h6 class="top_contect">
                                        <a href="tel:+2348134771000">
                                            <i class="fa-sharp fa-solid fa-phone pr-2"></i>
                                            08130000000
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 d-flex flex-row justify-content-end">
                            <a href=""><i class="text-white fa-brands fa-instagram pl-2 pr-2"></i></a>&nbsp;
                            <a href=""> <i class="text-white fa-brands fa-facebook pr-2"></i></a>&nbsp;
                            <a href=""><i class="text-white fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar  navbar-expand-lg fixed-top navbar-light pl-5 pr-5">
                <a class="logo_icon ml-3 ml-sm-0 pt-1 pb-1" href="index.php">
                    <img src="image/logo4.png" width="250" class="logo" alt="">
                </a>
                <button class="navbar-toggler" id="burger" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-sharp fa-solid fa-bars text-color"></i>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto topnav">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="index.php">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-weight-bold dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Who We Are
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item font-weight-bold" href="about-us.php">About Us</a>
                                <a class="dropdown-item font-weight-bold" href="program.php">Our Program</a>
                                <a class="dropdown-item font-weight-bold" href="gallery.php">Our Gallery</a>
                                <a class="dropdown-item font-weight-bold" href="founder.php">Our Founder</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  font-weight-bold" href="partner.php">Be A Partner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  font-weight-bold" href="contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-weight-bold dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Branch
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item font-weight-bold" target="_blank"
                                    href="https://usa.seraphicfoundation.org/">USA
                                    Branch</a>
                                <a class="dropdown-item font-weight-bold" target="_blank"
                                    href="https://seraphichospital.org/">Seraphic
                                    Hospital</a>
                                <a class="dropdown-item font-weight-bold" target="_blank"
                                    href="https://www.zpmom.org/">Zion
                                    Ministry</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal"
                                data-target="#myModal">Sign In</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link  ml-3 mr-5 btn  text-color font-weight-normal" type="button"
                                href="donate.php" id="nav-btn" data-target="#myModal">Donate Now</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>