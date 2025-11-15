<?php





// Connecting to the Database (use environment variables if available)

$servername = getenv('DB_HOST') ?: 'sql105.epizy.com';
$username   = getenv('DB_USER') ?: 'epiz_31564581';
$password   = getenv('DB_PASS') ?: 'hUL8gwjMRqx';
$database   = getenv('DB_NAME') ?: 'epiz_31564581_register';

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);





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

