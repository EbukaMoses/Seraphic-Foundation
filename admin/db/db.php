<?php 

// $connection = mysqli_connect('localhost', 'root', '', 'cms');

// if($connection){
//     echo "connected";
// }


// OR 

// $db_user = 'localhost';
// $db_user = 'localhost';
// $db_user = 'localhost';
// $db_user = 'localhost';


// OR 
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "shf";


foreach($db as $key => $value) {

    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    echo "!connected";
}
?>