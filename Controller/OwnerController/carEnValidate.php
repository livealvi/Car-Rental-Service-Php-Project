<?php
//Checks name validation conditions
function test_name($cname){
    $cname = trim($cname);
    $cname = stripslashes($cname);
    $cname = htmlspecialchars($cname);
    if(strlen($cname) < 5) return false;
    else{
        $chars = str_split($cname);
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

$c_name = $m_no = $s_no = $car_no = $price= "";

$req_err = [];//stores errors if a required field is empty
$val_err = [];//stores errors if input is not valid

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])) array_push($req_err, "Company Name is Required");
    else{
        if(test_name($_POST["name"])) $c_name = trimmer($_POST["name"]);
        else{
            array_push($val_err, "name must be 5 characters long and without numbers");
        }
    }
    if(empty($_POST["model"])) array_push($req_err, "Model no Required");
    else{
        if(test_name($_POST["model"])) $m_no = trimmer($_POST["model"]);
        else{
            array_push($val_err, "must be 5 characters long");
        }
    }
    if(empty($_POST["serial"])) array_push($req_err, "Serial no Required");
    else{
        if(test_name($_POST["serial"])) $s_no = trimmer($_POST["serial"]);
        else{
            array_push($val_err, "must be 5 characters long");
        }
    }

    if(empty($_POST["number"])) array_push($req_err, "Car no Required");
    else{
        if(test_name($_POST["number"])) $car_no = trimmer($_POST["number"]);
        else{
            array_push($val_err, "must be 5 characters long");
        }
    }

    if(empty($_POST["price"])) array_push($req_err, "Rental Required");
    else $price = trimmer($_POST["price"]);


    if(empty($_POST["description"])) array_push($req_err, "Description Required");
    else{
        if(test_name($_POST["description"])) $car_no = trimmer($_POST["description"]);
        else{
            array_push($val_err, "Must be 20 characters long");
        }
    }
    
 

  
    if(!isset($_POST["up_file"])) array_push($req_err, "File selection Required");
    if(!isset($_POST["img"])) array_push($req_err, "Image selection Required");

}

?>