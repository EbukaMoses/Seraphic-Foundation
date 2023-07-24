<?php

 if(!isset($_SESSION['auth']) && ($_SESSION['role'] !== 'admin')){
    $_SESSION['error'] = "Login to access Dashboard";
    header("Location: index.php");
    exit(0);
 }else{
   //  if($_SESSION['auth_role'] != '1'){
   //      $_SESSION['error'] = "You are not Allowed here";
   //      header("Location: index.php");
   //      exit(0);
   //  }
 }
?>