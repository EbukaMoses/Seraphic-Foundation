<!DOCTYPE html>
<html lang="en">
    <head>
        <?php session_start(); ?>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Corona Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
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
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        <div class="card col-lg-4 mx-auto" id="card">
                            <div class="card-body px-5 py-5">
                                <img src="../image/logo3.png" class="mb-4" width="80" alt="">
                                <?php include("functions/message.php");?>
                                <h3 class="card-title text-left mb-3">Enter Passkey</h3>
                                <form action="functions/regcode.php" method="POST">
                                    <div class="form-group">
                                        <label>Code *</label>
                                        <input type="password" class="form-control text-white p_input" name="passcode">
                                    </div>
                                    <div class=" text-center">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block enter-btn"
                                            name="reg">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- row ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- endinject -->
    </body>
</html>