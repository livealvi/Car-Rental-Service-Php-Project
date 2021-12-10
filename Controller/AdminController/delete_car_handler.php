<?php
include '../../Model/Car_data_access.php';

$success = delete_car($_GET['id']);

if($success) echo 'successful';
else echo 'failed';