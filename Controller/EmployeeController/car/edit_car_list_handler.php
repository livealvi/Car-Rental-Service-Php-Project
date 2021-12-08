<?php
include '../../../Model/Car_data_access.php';
include '../../../Model/User_data_access.php';
include __DIR__ . '/../validator/user_validate.php';
include __DIR__ . '/../validator/car_validate.php';


$car_id = $owner_id = $car_model_name = $car_reg_no = $is_available = "";
$no = "";
$yes = "";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

$userQuery = find_car_by_id($id);

if ($userQuery->num_rows > 0) {
    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
        $car_id = $row["car_id"];
        $owner_id = $row["owner_id"];
        $car_model_name = $row["car_model_name"];
        $car_reg_no = $row["car_reg_no"];

        if ($row["is_available"] == "no") {
            $no = "checked";
        } else {
            $yes = "checked";
        }
    }
} else {
    echo "0 results";
}

if ((isset($_POST['update']))) {

    $userQuery = update_car($_POST['owner_id'], $_POST['car_model_name'], $_POST['car_reg_no'], $_POST['is_available'], $_POST['car_id']);

    if ($userQuery == TRUE) {
        array_push($val_err, "Update Data");
    } else {
        array_push($val_err, "Could not update");
    }
}
