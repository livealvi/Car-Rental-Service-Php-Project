<?php
include '../../../Model/User_data_access.php';
include __DIR__ . '/../validator/user_validate.php';

$user_name = $user_email = $user_mobile = $user_password = $user_img_url = "";
$user_type = "owner";

$req_err = []; //stores errors if a required field is empty
$val_err = []; //stores errors if input is not valid

if ((isset($_POST['submit']))) {
    if (empty($_POST["user_name"])) array_push($req_err, "User Name Required");
    else {
        if (test_name($_POST["user_name"])) $user_name = trimmer($_POST["user_name"]);
        else {
            array_push($val_err, "Enter a valid user name");
        }
    }
    if (empty($_POST["user_email"])) array_push($req_err, "User email Required");
    else {
        if (test_mail($_POST["user_email"])) $user_email = trimmer($_POST["user_email"]);
        else {
            array_push($val_err, "Enter a valid email");
        }
    }

    if (empty($_POST["user_mobile"])) array_push($req_err, "User mobile Required");
    else {
        if (test_mobile($_POST["user_mobile"])) $user_mobile = trimmer($_POST["user_mobile"]);
        else {
            array_push($val_err, "Enter a valid mobile");
        }
    }

    if (empty($_POST["user_password"]) || empty($_POST["user_password_confirm"])) array_push($req_err, "Password and confirmation Required");
    else {
        if (test_pass($_POST["user_password"]) && test_pass_match($_POST["user_password"], $_POST["user_password_confirm"])) $user_password = trimmer($_POST["user_password"]);
        else if (!test_pass_match($_POST["user_password"], $_POST["user_password_confirm"])) {
            array_push($val_err, "Password confirmation does not match");
        } else {
            array_push($val_err, "Password must be 6 characters long");
        }
    }
    if (empty($_FILES["img_file"]["name"])) array_push($req_err, "File selection Required");
    else {
        $img_file = $_FILES["img_file"]["name"];
        $folder_name = "../../User_Image/";
        $target_file = $folder_name . $user_name . basename($img_file);
        $user_img_url = $target_file;
        move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file);
    }
    if (empty($val_err) && empty($req_err)) {
        $success = add_user($user_name, $user_email, $user_mobile, $user_password, $user_type, $user_img_url);
        if ($success == false) array_push($val_err, "Owner could not be added");
    }
}
