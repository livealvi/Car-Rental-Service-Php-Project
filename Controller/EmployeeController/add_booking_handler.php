<?php
include '../../Model/Rent_data_access.php';

//function to check if id is number
function test_id($id)
{
    $id = trimmer($id);
    if (!is_numeric($id) || (intval($id) <= 0)) return false;
    return true;
}

//return trimmed data
function trimmer($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$car_id = $owner_id = $renter_id = $employee_id = $rent_date =  $rent_return_date = "";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

if ((isset($_POST['submit']))) {
    if (empty($_POST["car_id"])) array_push($req_err, "Car ID Required");
    else {
        if (test_id($_POST["car_id"])) $car_id = test_id($_POST["car_id"]);
        else {
            array_push($val_err, "Enter a valid Car ID");
        }
    }

    if (empty($_POST["owner_id"])) array_push($req_err, "Owner ID");
    else {
        if (test_id($_POST["owner_id"])) $owner_id = test_id($_POST["owner_id"]);
        else {
            array_push($val_err, "Enter a valid Owner ID");
        }
    }

    if (empty($_POST["renter_id"])) array_push($req_err, "Renter ID Required");
    else {
        if (test_id($_POST["renter_id"])) $renter_id = test_id($_POST["renter_id"]);
        else {
            array_push($val_err, "Enter a valid Renter ID");
        }
    }

    if (empty($_POST["employee_id"])) array_push($req_err, "Employee ID Required");
    else {
        if (test_id($_POST["employee_id"])) $employee_id = test_id($_POST["employee_id"]);
        else {
            array_push($val_err, "Enter a valid Employee ID");
        }
    }

    if (empty($_POST["rent_date"])) array_push($req_err, "Rent Date Required");
    else {
        $rent_date = $_POST["rent_date"];
    }

    if (empty($_POST["rent_return_date"])) array_push($req_err, "Rent Return Date Required");
    else {

        $rent_return_date = $_POST["rent_return_date"];
    }

    if (empty($val_err) && empty($req_err)) {
        $success = add_booking($rent_date, $rent_return_date, $car_id, $owner_id, $renter_id, $employee_id);
        if ($success == false) array_push($val_err, "Car could not be added");
    }


    // $userQuery = add_booking($rent_date, $rent_return_date, $car_id, $owner_id, $renter_id, $employee_id);

    // if ($userQuery == TRUE) {
    //     array_push($val_err, "Update Data");
    // } else {
    //     array_push($val_err, "Could not update");
    // }

    // if (empty($val_err) && empty($req_err)) {
    //     $success = add_booking($car_id, $owner_id, $renter_id, $employee_id, $rent_date, $rent_return_date);
    //     if ($success == false) array_push($val_err, "Booking not be added");
    // }
}
