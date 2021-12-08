<?php
include '../../../Model/Rent_data_access.php';
include '../../../Model/Car_data_access.php';
include '../../../Model/User_data_access.php';
include __DIR__ . '/../validator/user_validate.php';
include __DIR__ . '/../validator/car_validate.php';

$rent_id = $car_id = $owner_id = $renter_id = $employee_id = $rent_date =  $rent_return_date = "";
$date1 = $date2 = "";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

$userQuery = find_rent_by_id($id);

if ($userQuery->num_rows > 0) {
    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {

        $rent_id = $row["rent_id"];
        $car_id = $row["car_id"];
        $owner_id = $row["owner_id"];
        $renter_id = $row["renter_id"];
        $employee_id = $row["employee_id"];

        $rent_date = date('Y-m-d', strtotime($row['rent_date']));

        $rent_return_date = date('Y-m-d', strtotime($row['rent_return_date']));
    }
} else {
    echo "0 results";
}


if ((isset($_POST['update']))) {

    $userQuery = update_booking($_POST['rent_id'], $_POST['car_id'], $_POST['owner_id'], $_POST['renter_id'], $_POST['employee_id'], $_POST['rent_date'], $_POST['rent_return_date']);

    if ($userQuery == TRUE) {
        array_push($val_err, "Update Data");
    } else {
        array_push($val_err, "Could not update");
    }
}
