<?php
include '../../Model/Rent_data_access.php';
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
$success = update_booking($obj->rent_id, $obj->car_id, $obj->owner_id, $obj->renter_id, $obj->employee_id, $obj->rent_date, $obj->rent_return_date);
if($success) echo 'successful';
else echo 'failed';

?>