<?php
include '../Model/User_data_access.php';
session_start();

//function to check username
function test_name($name){
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    if(!ctype_alnum($name)) return false;
    return true;
}

//function to strip data of unwanted chars
function trimmer($data){
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

$user_name = $password = "";
$remember = false;

$req_err = [];//stores errors if a required field is empty
$val_err = [];//stores errors if input is not valid
$user_validation_error = [];//stores error if user validation failed

if((isset($_POST['submit']))){
    if(empty($_POST["user_name"])) array_push($req_err, "User name field cannot be empty.");
    else{
        if(test_name($_POST["user_name"])) $user_name = trimmer($_POST["user_name"]);
        else array_push($val_err, "Please enter a valid User name.");
    }
    if(empty($_POST["password"])) array_push($req_err, "Password field cannot be empty.");
    if(isset($_POST["remember"])) $remember = true;

    if (empty($val_err) && empty($req_err)){
        $user = user_login_validate($user_name, $password);
        if($user == null) array_push($user_validation_error, "Login validation failed.");
        else{
            $_SESSION["valid"] = "yes";
            $_SESSION["user_name"] = $user->getUserName();
            $_SESSION["user_type"] = $user->getUserType();
            if($remember){
                setcookie ("user_name", $user->getUserName(), time()+ (86400*30));
                setcookie ("password", $user->getUserPassword(), time()+ (86400*30));
            }
            else{
                setcookie ("user_name", "");
                setcookie ("password", "");
            }
        }
    }
}



