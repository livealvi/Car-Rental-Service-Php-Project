<?php
include '../../Model/User_data_access.php';
$userObj = find_user_by_id($userId);
$user = $userObj->fetch_assoc();
?>