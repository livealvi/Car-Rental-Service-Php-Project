<!--data handler for owner list-->
<?php
include '../../../Model/User_data_access.php';

$owners = get_all_user_by_type('owner');
