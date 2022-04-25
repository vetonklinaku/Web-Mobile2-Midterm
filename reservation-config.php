<?php 

require_once "./common/config.php";

$userId = $carID = $pLocation = $dLocation = $pDate = $dDate = "";

    $userId = $_POST["userId"];
    $carID = $_POST["carId"];
    $pLocation = $_POST["pLocation"];
    $dLocation = $_POST["dLocation"];
    $pDate = $_POST["pDate"];
    $dDate = $_POST["dDate"];
    echo "<h2>$userId , $carID , $pLocation , $dLocation , $pDate , $dDate </h2>";
?>