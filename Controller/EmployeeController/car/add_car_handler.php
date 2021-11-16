<?php
include '../../../Model/Car_data_access.php';
include __DIR__ . '/../validator/user_validate.php';
include __DIR__ . '/../validator/car_validate.php';


$owner_id = $car_model_name = $car_reg_no = $car_img_url = "";
$is_available = "yes";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

if ((isset($_POST['submit']))) {
    if (empty($_POST["owner_id"])) array_push($req_err, "Owner id is Required");
    else {
        if (test_id($_POST["owner_id"])) $owner_id = trimmer($_POST["owner_id"]);
        else {
            array_push($val_err, "Enter a valid owner id");
        }
    }
    if (empty($_POST["car_model_name"])) array_push($req_err, "Car model is Required");
    else {
        if (test_name($_POST["car_model_name"])) $car_model_name = trimmer($_POST["car_model_name"]);
        else {
            array_push($val_err, "Enter a valid model name");
        }
    }
    if (empty($_POST["car_reg_no"])) array_push($req_err, "Car registration number is Required");
    else {
        if (test_reg($_POST["car_reg_no"])) $car_reg_no = trimmer($_POST["car_reg_no"]);
        else {
            array_push($val_err, "Enter a valid registration number");
        }
    }
    if (empty($_FILES["img_file"]["name"])) array_push($req_err, "File selection Required");
    else {
        $img_file = $_FILES["img_file"]["name"];
        $folder_name = "../../User_Image/";
        $target_file = $folder_name . $user_name . basename($img_file);
        $car_img_url = $target_file;
        move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file);
    }
    if (empty($val_err) && empty($req_err)) {
        $success = add_car($owner_id, $car_model_name, $car_reg_no, $is_available, $car_img_url);
        if ($success == false) array_push($val_err, "Car could not be added");
    }
}
