<?php
    require_once('../../DATABASE_INFO.php');

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if(!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
?>