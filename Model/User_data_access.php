<?php
/*This file will hold all the data queries related to USER table
of the database. For USER related functionality, add this file
as required in control layer, add new methods to thi file and call
required methods in control layer methods. PLease maintain proper
naming convention to prevent ambiguity among method names*/

require_once 'Db_connector.php';
require_once 'Classes/User.php';

//function to validate user login
function user_login_validate($user_name, $password)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM User WHERE user_name='$user_name' AND user_password='$password'");
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user = new User();
        $user->setUserName($row["user_name"]);
        $user->setUserPassword($row["user_password"]);
        $user->setUserType($row["user_type"]);

        $connection->close_con($con_obj);
        return $user;
    } else {
        $connection->close_con($con_obj);
        return null;
    }
}

//function to get all user of certain type
function get_all_user_by_type($user_type)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM User WHERE user_type='$user_type'");
    if ($result->num_rows > 0) {
        $user_list = [];
        while ($row = $result->fetch_assoc()) {
            $user = new User();
            $user->setUserId($row["user_id"]);
            $user->setUserName($row["user_name"]);
            $user->setUserEmail($row["user_email"]);
            $user->setUserMobile($row["user_mobile"]);
            $user->setUserPassword($row["user_password"]);
            $user->setUserType($row["user_type"]);
            $user->setArchiveStatus($row["archive_status"]);
            $user->setUserImgUrl($row["user_img_url"]);
            array_push($user_list, $user);
        }
        $connection->close_con($con_obj);
        return $user_list;
    } else {
        $connection->close_con($con_obj);
        return null;
    }
}

//function to get number of certain type of user
function get_user_num_by_type($user_type)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM User WHERE user_type='$user_type'");
    $num = $result->num_rows;

    $connection->close_con($con_obj);
    return $num;
}

//function to get user_name by ID
function get_user_name_by_id($user_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM User WHERE user_id='$user_id'");
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $connection->close_con($con_obj);
        return $row["user_name"];
    } else return '';
}

//function to add user
function add_user($user_name, $user_email, $user_mobile, $user_password, $user_type, $user_img_url)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("INSERT INTO User (user_name, user_email, user_mobile, user_password, user_type, user_img_url)
                                     VALUES ('$user_name', '$user_email', '$user_mobile', '$user_password', '$user_type', '$user_img_url')");
    return $result;
}


//function search for update_user
function find_user_by_id($user_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $result = $con_obj->query("SELECT * FROM  User WHERE user_id='$user_id'");
    return $result;
}

//function search for update_user
function delete_user_by_id($user_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $result = $con_obj->query("DELETE FROM  User WHERE user_id='$user_id'");
    return $result;
}

//function to update user
function update_user($user_id, $user_name, $user_email, $user_mobile, $archive_status)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $sql = "UPDATE User SET user_name='$user_name', user_email='$user_email',  user_mobile='$user_mobile', archive_status='$archive_status' WHERE user_id='$user_id'";

    if ($con_obj->query($sql) === TRUE) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return  $result;
}

//function search for update_user
function search_user($user)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    // $sql = "SELECT * FROM  User WHERE user_id like '%" . $user . "%' or user_name like '%" . $user . "%' or user_mobile like '%" . $user . "%' or user_email like '%" . $user . "%' or archive_status like '%" . $user . "%'";

    // echo $sql;

    $result = $con_obj->query("SELECT * FROM  User WHERE user_type='renter' and (user_id like '%" . $user . "%' or user_name like '%" . $user . "%' or user_mobile like '%" . $user . "%' or user_email like '%" . $user . "%' or archive_status like '%" . $user . "%')");
    return $result;
}
