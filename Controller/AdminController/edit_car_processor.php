<?php
include '../../Model/Car_data_access.php';
$carObj = find_car_by_id($carId);
$car = $carObj->fetch_assoc();
?>