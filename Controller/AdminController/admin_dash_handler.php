<!--data handler for admin dash-->
<?php
include '../../Model/User_data_access.php';
include '../../Model/Car_data_access.php';
include '../../Model/Rent_data_access.php';

$num_of_owners = get_user_num_by_type('owner');
$num_of_renters = get_user_num_by_type('renter');
$num_of_cars = get_car_num();

$file_name = '../contact.json';
$existing_data = file_get_contents($file_name);
$temp_json_data = json_decode($existing_data);
$feedbacks = count($temp_json_data);

$rents = get_all_rent_info();
