<?php
include '../../Model/Car_data_access.php';
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
$success = update_car($obj->car_id, $obj->owner_id, $obj->car_model_name, $obj->car_reg_no, $obj->is_available);
if($success) echo 'successful';
else echo 'failed';