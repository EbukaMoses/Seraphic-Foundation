<?php
// if(isset($_SESSION['auth'] && !$_SESSION['message'])){
//     session_destroy();
//     unset_se
// }

session_start();

if(isset($_POST['logout_btn'])){
    //session destory

    unset($_SESSION['auth']);
    unset($_SESSION['username']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    $_SESSION['message'] = "Logout Successfully";
    header("Location: ../index.php");
    exit(0);
}


?>