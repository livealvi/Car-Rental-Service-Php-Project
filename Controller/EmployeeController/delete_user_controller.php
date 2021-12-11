<?PHP


$id = $_GET['id'];

if (!$id) {
    echo 'Invalid ID';
    return;
}

require_once('../../Model/User_data_access.php');

$result = delete_user_by_id($id);

//header('location: ../../View/Employee/renter/renter_list_page.php');

if ($result) echo 'successful';
else echo 'failed';
