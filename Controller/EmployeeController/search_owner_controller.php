<?php
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../../Model/User_data_access.php';


$query = $_GET['query'];

if ($query == "") {
    echo "reset";
    return;
}

$result = search_owner($query);

$arr = $result->fetch_all(MYSQLI_ASSOC);

if (count($arr) == 0) {
    echo "empty";
    return;
}


echo json_encode($arr);
