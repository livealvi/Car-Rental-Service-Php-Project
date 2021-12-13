<?php
include '../../Model/Rent_data_access.php';
$bookingObj = find_rent_by_id($bookingId);
$booking = $bookingObj->fetch_assoc();
?>