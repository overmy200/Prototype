<?php

if ($open_connect != 1){
    die(header("Location: form_login.php"));
}

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user_management";
$port = NULL;
$socket = NULL;
$connect = mysqli_connect($hostname , $username , $password , $database);

if (!$connect){
    die( mysqli_connect_error($connect) );
}
else{
    mysqli_set_charset($connect , "utf8");
}

?>