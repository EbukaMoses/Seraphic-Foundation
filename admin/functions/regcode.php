<?php
    session_start();
    include "../db/db.php";
    include "helper.php";

if(isset($_POST['reg'])){
    $code = mysqli_real_escape_string($connection, $_POST['passcode']);

    if(empty($code) && $code < 4 && $code > 4){
        $_SESSION['error'] = "Access Denied, Register a New Admin!!!";
        header("Location: ../reg.php");
        exit(0);
    }
    
    $query = "SELECT * FROM code WHERE super_code = '{$code}'";
    $run_query = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($run_query) > 0){
        $_SESSION['super_admin'] = true;
        $_SESSION['super_role'] = "admin";
        $_SESSION['message'] = "Access Granted!!!";
        header("Location: ../register.php");
        exit(0); 
    }
    if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    
    

    
    // $query = "INSERT INTO code (super_code, super_date) VALUES ('{$code}', NOW())";
    // $run_query = mysqli_query($connection, $query);

    // if(!$run_query){
    //     die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    // }
    // $_SESSION['message'] = "Super Code Added Successfully!!!";
    // header("Location: ../reg.php");
    // exit(0); 
    
}

if(isset($_POST['reg_admin'])){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, md5($_POST['password']));

    if(empty($username) || empty($password)){
        $_SESSION['error'] = "Inputs are Empty!!!";
        header("Location: ../register.php");
        exit(0);
    }
    
    $checkemail = "SELECT email FROM users WHERE email = '{$username}'" ;
    $run_check = mysqli_query($connection, $checkemail);
    
    if(mysqli_num_rows($run_check) > 0){
        unset($_SESSION['super_role']);
        unset($_SESSION['super_admin']);
        $_SESSION['error'] = "User Already Exist!!!";
        header("Location: ../login.php");
        exit(0);
    }

    $query = "INSERT INTO users (email, passkey, created_date) VALUES ('{$username}', '{$password}', NOW())";
    $run_query = mysqli_query($connection, $query);

    if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    unset($_SESSION['role']);
    unset($_SESSION['admin']);
    unset($_SESSION['super_role']);
    unset($_SESSION['super_admin']);
    $_SESSION['message'] = "User Added Successfully!!!";
    header("Location: ../login.php");
    exit(0); 
    
}

if(isset($_POST['login_btn'])){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, md5($_POST['password']));

    if(empty($username) || empty($password)){
        $_SESSION['error'] = "Inputs are Empty!!!";
        header("Location: ../login.php");
        exit(0);
    }
    
    $query = "SELECT * FROM users WHERE email = '{$username}' AND passkey = '{$password}' LIMIT 1";
    $run_query = mysqli_query($connection, $query);
    
     if(mysqli_num_rows($run_query) > 0){
        if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }

    $_SESSION['admin'] = true;
    $_SESSION['role'] = "admin";
    $_SESSION['message'] = "Login Successfully!!!";
    header("Location: ../index.php");
    exit(0); 
    }
    
}


    ?>