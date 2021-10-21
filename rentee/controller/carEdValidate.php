<?php
//Checks name validation conditions
function test_name($name){
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    if(strlen($name) < 5) return false;
    else{
        $chars = str_split($name);
        foreach ($chars as $char){
            if(is_numeric($char)) return false;
        }
    }
    return true;
}

//checks email validation conditions
function test_mail($mail){
    $mail = trim($mail);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $chars = str_split($mail);
    foreach ($chars as $char){
        if($char == '@') return true;
    }
    return false;
}

//checks password validation conditions
function test_pass($pass){
    if(strlen($pass) < 8) return false;
    return true;
}

//return trimmed data
function trimmer($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*$first_name = $last_name= $age = $designation = $language = $email = $password = "";

$req_err = [];//stores errors if a required field is empty
$val_err = [];//stores errors if input is not valid

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["first_name"])) array_push($req_err, "First Name Required");
    else{
        if(test_name($_POST["first_name"])) $first_name = trimmer($_POST["first_name"]);
        else{
            array_push($val_err, "First name must be 5 characters long and without numbers");
        }
    }
    if(empty($_POST["last_name"])) array_push($req_err, "Last Name Required");
    else{
        if(test_name($_POST["last_name"])) $last_name = trimmer($_POST["last_name"]);
        else{
            array_push($val_err, "Last name must be 5 characters long and without numbers");
        }
    }
    if(empty($_POST["age"])) array_push($req_err, "Age Required");
    else $age = trimmer($_POST["age"]);
    if(empty($_POST["designation"])) array_push($req_err, "Designation Required");
    else $designation = trimmer($_POST["designation"]);
    if(empty($_POST["language"])) array_push($req_err, "language Required");
    else $language = trimmer($_POST["language"]);
    if(empty($_POST["email"])) array_push($req_err, "Email Required");
    else{
        if(test_mail($_POST["email"])) $email = trimmer($_POST["email"]);
        else{
            array_push($val_err, "E-mail must contain @");
        }
    }
    if(empty($_POST["password"])) array_push($req_err, "Password Required");
    else{
        if(test_pass($_POST["password"])) $password = trimmer($_POST["password"]);
        else{
            array_push($val_err, "Password must be 8 characters long.");
        }
    }
    if(!isset($_POST["up_file"])) array_push($req_err, "File selection Required");
}

?>*/