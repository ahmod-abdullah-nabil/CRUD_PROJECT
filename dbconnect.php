<?php


// Connecting to the Database
$servername = "sql105.epizy.com";
$username = "epiz_31564581";
$password = "hUL8gwjMRqx";
$database = "epiz_31564581_register";

// Create a connection
$conn = mysqli_connect("$servername", "$username", "$password", "$database");


// Die if connection was not successful
/*
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
*/

?>
