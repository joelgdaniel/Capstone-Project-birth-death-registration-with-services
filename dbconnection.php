<?php 
session_start();
define('DB_HOST','localhost');
define('DB_USER','admin');
define('DB_PASSWORD','#Hackathon@2022');
define('DB_NAME','hackathon');

//create connection
$conn = new mysqli(DB_HOST ,DB_USER ,DB_PASSWORD ,DB_NAME);

if($conn->connect_error){
    die('connection Failed' . $conn->connect_error);
}
else{
    echo '<script>console.log("Database connection Succesfull");</script>';
}

?>