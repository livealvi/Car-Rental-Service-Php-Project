<!--data handler for employee list-->
<?php
include '../../Model/User_data_access.php';

$employees = get_all_user_by_type('employee');
