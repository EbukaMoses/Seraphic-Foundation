<?php

 if(!isset($_SESSION['auth']) && ($_SESSION['role'] !== 'admin')){
    if($_SESSION['message']){
      $_SESSION['message'];
    }else{
       $_SESSION['error'] = "Login to access Dashboard"; 
    }
  
    
    header("Location: login.php");
    exit(0);
 }else{
    // if(isset($_POST['logout_btn'])){
    //     $_SESSION['error'] = "";
    //     header("Location: index.php");
    //     exit(0);
    // }
 }
?>