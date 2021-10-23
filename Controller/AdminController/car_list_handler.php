<!--data handler for car list-->
<?php
include '../../Model/Car_data_access.php';
include '../../Model/User_data_access.php';

$cars = get_all_car();
