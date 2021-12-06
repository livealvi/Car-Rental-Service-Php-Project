<?php
include '../../Model/Rent_data_access.php';

$success = delete_booking($_GET['id']);

if($success) echo 'successful';
else echo 'failed';