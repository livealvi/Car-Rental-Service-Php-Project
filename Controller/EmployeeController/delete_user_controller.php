<?PHP
include('../../Model/User_data_access.php');

$id = $_GET['id'];
if (!$id) {
    echo 'Invalid ID';
    return;
}


$result_user = delete_user_by_id($id);

if ($result_user) echo 'successful';
else echo 'failed';
