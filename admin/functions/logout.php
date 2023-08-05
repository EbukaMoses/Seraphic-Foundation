<?php
// if(isset($_SESSION['auth'] && !$_SESSION['message'])){
//     session_destroy();
//     unset_se
// }

session_start();

if(isset($_POST['logout_btn'])){

    //session destory
    unset($_SESSION['auth']);
    unset($_SESSION['role']);
    unset($_SESSION['admin']);
    unset($_SESSION['super_role']);
    unset($_SESSION['super_admin']);
        // session_destroy();

    $_SESSION['message'] = "Logout Successfully";
    
    header("Location: ../index.php");
    exit(0);
}


?>