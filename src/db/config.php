<?php
// Paramètres de connexion
$host = 'localhost'; 
$dbname = 'locationvoiture'; 
$username = 'Bouchta'; 
$password = '0000'; 

$conn =  new Mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: ");
}

?>