<?php

//function to check if id is number
function test_id($id)
{
    $id = trimmer($id);
    if (!is_numeric($id) || (intval($id) <= 0)) return false;
    return true;
}

//function to check username
function test_name($name)
{
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    if (!ctype_alnum($name)) return false;
    return true;
}

//function to check email
function test_mail($mail)
{
    $mail = trim($mail);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $chars = str_split($mail);
    foreach ($chars as $char) {
        if ($char == '@') return true;
    }
    return false;
}

//function to check mobile no
function test_mobile($mobile)
{
    $mobile = trim($mobile);
    $mobile = stripslashes($mobile);
    $mobile = htmlspecialchars($mobile);
    if (strlen($mobile) != 11) return false;
    return true;
}

//function to check password
function test_pass($pass)
{
    if (strlen($pass) < 6) return false;
    return true;
}

//function to check password
function test_pass_match($pass, $confirm_pass)
{
    if ($pass != $confirm_pass) return false;
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
