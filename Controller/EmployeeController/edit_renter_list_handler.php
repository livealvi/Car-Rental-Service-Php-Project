<?php

include '../../Model/User_data_access.php';
include 'user_validate.php';


$user_id = $user_name = $user_email = $user_mobile = $user_password = $user_img_url = "";
$user_type = "renter";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

$userQuery = find_user_by_id($id);

if ($userQuery->num_rows > 0) {
    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {

        $user_id = $row["user_id"];
        $user_name = $row["user_name"];
        $user_email = $row["user_email"];
        $user_mobile = $row["user_mobile"];
    }
} else {
    echo "0 results";
}


if ((isset($_POST['update']))) {

    $userQuery = update_user($_POST['user_id'], $_POST['user_name'], $_POST['user_email'], $_POST['user_mobile']);

    if ($userQuery == TRUE) {
        array_push($val_err, "Update Data");
    } else {
        array_push($val_err, "Could not update");
    }
    //header('location : ../../../../View/Employee/renter_list_page.php');
}
