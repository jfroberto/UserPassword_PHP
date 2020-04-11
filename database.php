<?php

$host = 'localhost';
$user = 'root';
$password = '12345';
$database = 'php-crud';

$connection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()){
    echo "Error: Unable to connect to mySQL <br>";
    echo "Message:" .mysqli_connect_error(). "<br>";
} //else {
    //echo "Successfully connected!";
//}

?>