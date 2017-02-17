<?php

$serverName = "localhost";
$username ="root";
$password ="";
$dbname ="podaci";

$conn =mysqli_connect ($serverName, $username, $password,$dbname);

if (!$conn){
    die ("nema konekcije");
}

?>