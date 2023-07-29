<?php
    session_start();
    include "../db/db.php";
    include "helper.php";

verification

if(isset($_POST['reg'])){
    $code = mysqli_real_escape_string($connection, $_POST['passcode']);

    if(empty($code)){
        
    }
    
}


    ?>