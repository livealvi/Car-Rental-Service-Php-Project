<?php
/*This file will hold all the data queries related to CAR table
of the database. For CAR related functionality, add this file
as required in control layer, add new methods to thi file and call
required methods in control layer methods. PLease maintain proper
naming convention to prevent ambiguity among method names*/

require_once 'Db_connector.php';
require_once 'Classes/Car.php';

//function to get number of cars
function get_car_num(){
    $connection = new db();
    $con_obj=$connection->open_con();
    $result = $con_obj->query("SELECT * FROM Car");
    $num = $result->num_rows;

    $connection->close_con($con_obj);
    return $num;
}

//function to get car_name by ID
function get_car_name_by_id($car_id){
    $connection = new db();
    $con_obj=$connection->open_con();
    $result = $con_obj->query("SELECT * FROM Car WHERE car_id='$car_id'");
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();

        $connection->close_con($con_obj);
        return $row["car_model_name"];
    }
    else return '';
}

?>