<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include '../../Model/User_data_access.php';

$obj = json_decode($_POST["x"], false);

$success = update_user($obj->user_id, $obj->user_name, $obj->user_email, $obj->user_mobile, $obj->archive_status);
if ($success) {
    echo 'successful';
    return;
}
echo 'failed';
