<?php

//function to strip data of unwanted chars
function trimmer($data){
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

$name = $email = $subject = $message = "";

$req_err = [];//stores errors if a required field is empty

if(isset($_POST['submit'])){
    if(empty($_POST["name"])) array_push($req_err, "Name field cannot be empty.");
    else{
        $name = trimmer($_POST["name"]);
    }
    if(empty($_POST["email"])) array_push($req_err, "Email field cannot be empty.");
    else{
        $email = trimmer($_POST["email"]);
    }
    if(empty($_POST["subject"])) array_push($req_err, "Subject field cannot be empty.");
    else{
        $subject = trimmer($_POST["subject"]);
    }
    if(empty($_POST["message"])) array_push($req_err, "Message field cannot be empty.");
    else{
        $message = trimmer($_POST["message"]);
    }
}