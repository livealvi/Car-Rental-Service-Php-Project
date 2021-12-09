<?php
include '../../Model/User_data_access.php';
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
$success = update_user($obj->user_id, $obj->user_name, $obj->user_email, $obj->user_mobile, $obj->archive_status);
if($success) echo 'successful';
else echo 'failed';