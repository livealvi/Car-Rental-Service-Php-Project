<?php
/*This file will hold all the data queries related to USER table
of the database. For USER related functionality, add this file
as required in control layer, add new methods to thi file and call
required methods in control layer methods. PLease maintain proper
naming convention to prevent ambiguity among method names*/

require_once 'Db_connector.php';
require_once 'Classes/User.php';

function user_login_validate($user_name, $password){
    $connection = new db();
    $con_obj=$connection->open_con();
    $result = $con_obj->query("SELECT * FROM User WHERE user_name='$user_name' AND user_password='$password'");
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $user = new User();
        $user->setUserName($row["user_name"]);
        $user->setUserPassword($row["user_password"]);
        $user->setUserType($row["user_type"]);

        $connection->close_con($con_obj);
        return $user;
    }
    else{
        $connection->close_con($con_obj);
        return null;
    }
}

?>