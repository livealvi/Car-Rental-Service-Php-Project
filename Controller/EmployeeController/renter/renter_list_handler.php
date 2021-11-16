<!--data handler for renter list-->
<?php
include '../../../Model/User_data_access.php';

$renters = get_all_user_by_type('renter');
