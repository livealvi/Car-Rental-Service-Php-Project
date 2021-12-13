<?PHP
include('../../Model/Car_data_access.php');

$car_id = $_GET['id'];
if (!$car_id) {
    echo 'Invalid ID';
    return;
}

$result_car = delete_car($car_id);
if ($result_car) echo 'successful';
else echo 'failed';
