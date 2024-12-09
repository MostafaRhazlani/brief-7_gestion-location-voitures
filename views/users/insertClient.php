<?php
    require_once('../../connectdb/connectiondb.php');
    include('./alert.php');
    // insert new client
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $address = isset($_POST['address']) ? $_POST['address'] : "";
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";

    $clientQuery = "INSERT INTO clients(name, address, numberPhone) VALUES(?,?,?)";

    $params = array($name, $address, $phone);
    $resultClientQuery = $conn->prepare($clientQuery);
    $resultClientQuery->execute($params);

    header('location:users.php');
?>