<?php
include '../../Model/User_data_access.php';
include '../../Model/Car_data_access.php';
include '../../Model/Rent_data_access.php';

$num_of_owners = get_user_num_by_type('owner');
$num_of_renters = get_user_num_by_type('renter');
$num_of_cars = get_car_num();

$rents = get_all_rent_info();



$renters = get_all_user_by_type('renter');
