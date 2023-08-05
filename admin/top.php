<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start(); 
    include('functions/auth.php');
    ?>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Corona Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <link rel="stylesheet" href="summernote/summernote-bs4.min.css">
        <!-- Summernote CSS - CDN Link -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- End layout styles -->
        <link rel="icon" type="image" href="../image/logo1.png">
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_sidebar.php -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                    <a class="sidebar-brand brand-logo text-white text-center text-decoration-none" href="index.php">
                        <h4>SERAPHIC HOMES FOUNDATION</h4>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item profile">
                        <div class="profile-desc">
                            <div class="profile-pic">
                                <div class="count-indicator">
                                    <img class="img-xs rounded-circle " src="../image/logo3.png" alt="">
                                    <span class="count bg-success"></span>
                                </div>
                                <div class="profile-name">
                                    <h5 class="mb-0 font-weight-normal">Welcome Back!</h5>
                                    <span>Seraphic Admin</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="index.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="hero.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                            </span>
                            <span class="menu-title">Hero</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="about.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-apps"></i>
                            </span>
                            <span class="menu-title">About</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="program.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-playlist-play"></i>
                            </span>
                            <span class="menu-title">Program</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="gallery.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-cast"></i>
                            </span>
                            <span class="menu-title">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="partners.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-recycle"></i>
                            </span>
                            <span class="menu-title">Partners</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="volunteers.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-multiple"></i>
                            </span>
                            <span class="menu-title">Volunteers</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="contact.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-contacts"></i>
                            </span>
                            <span class="menu-title">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="founder.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-account"></i>
                            </span>
                            <span class="menu-title">Founder</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="account_details.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-cash-usd"></i>
                            </span>
                            <span class="menu-title">Bank Account</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="social_account.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                            </span>
                            <span class="menu-title">Social Media</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="visitors.php">
                            <span class="menu-icon">
                                <i class="mdi mdi-earth"></i>
                            </span>
                            <span class="menu-title">Visitors</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.php -->
                <nav class="navbar p-0 fixed-top d-flex flex-row">
                    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../image/logo3.png"
                                alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown d-none d-lg-block">
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="createbuttonDropdown">
                                    <h6 class="p-3 mb-0">Projects</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-file-outline text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Software Development</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-web text-info"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">UI Development</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-layers text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">See all projects</p>
                                </div>
                            </li>
                            <li class="nav-item nav-settings d-none d-lg-block">
                                <a class="nav-link" href="#">
                                    <i class="mdi mdi-view-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown border-left">
                                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-email"></i>
                                    <span class="count bg-success"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="messageDropdown">
                                    <h6 class="p-3 mb-0">Messages</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face4.jpg" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                            <p class="text-muted mb-0"> 1 Minutes ago </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face2.jpg" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                            <p class="text-muted mb-0"> 15 Minutes ago </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face3.jpg" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                            <p class="text-muted mb-0"> 18 Minutes ago </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">4 new messages</p>
                                </div>
                            </li>
                            <li class="nav-item dropdown border-left">
                                <form action="functions/logout.php" method="POST">

                                    <button class="btn text-danger" name="logout_btn">
                                        <i class="mdi mdi-logout"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="offcanvas">
                            <span class="mdi mdi-format-line-spacing"></span>
                        </button>
                    </div>
                </nav>