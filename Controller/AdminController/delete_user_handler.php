<?php
include '../../Model/User_data_access.php';

$success = delete_user_by_id($_GET['id']);

if($success) echo 'successful';
else echo 'failed';