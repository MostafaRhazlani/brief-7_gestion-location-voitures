<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbName = 'societe_location_voitures';

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if(!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
?>