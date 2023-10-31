<?php

$sv = "localhost";
$database = "mercadito";
$username = "root";
$password = "Cp9982";
// Create connection
$conn = mysqli_connect($sv, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
