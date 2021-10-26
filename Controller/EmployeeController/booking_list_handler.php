<!--data handler for booking list-->
<?php
include '../../Model/User_data_access.php';
include '../../Model/Car_data_access.php';
include '../../Model/Rent_data_access.php';

$rents = get_all_rent_info();
