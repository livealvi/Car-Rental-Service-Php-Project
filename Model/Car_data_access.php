<?php
/*This file will hold all the data queries related to CAR table
of the database. For CAR related functionality, add this file
as required in control layer, add new methods to thi file and call
required methods in control layer methods. PLease maintain proper
naming convention to prevent ambiguity among method names*/

require_once 'Db_connector.php';
require_once 'Classes/Car.php';

//function to get all cars
function get_all_car()
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM Car");
    if ($result->num_rows > 0) {
        $car_list = [];
        while ($row = $result->fetch_assoc()) {
            $car = new Car();
            $car->setCarId($row["car_id"]);
            $car->setOwnerId($row["owner_id"]);
            $car->setCarModelName($row["car_model_name"]);
            $car->setCarRegNo($row["car_reg_no"]);
            $car->setIsAvailable($row["is_available"]);
            $car->setCarImgUrl($row["car_img_url"]);
            array_push($car_list, $car);
        }
        $connection->close_con($con_obj);
        return $car_list;
    } else {
        $connection->close_con($con_obj);
        return null;
    }
}

//function to get number of cars
function get_car_num()
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM Car");
    $num = $result->num_rows;

    $connection->close_con($con_obj);
    return $num;
}

//function to get car_name by ID
function get_car_name_by_id($car_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("SELECT * FROM Car WHERE car_id='$car_id'");
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $connection->close_con($con_obj);
        return $row["car_model_name"];
    } else return '';
}

//function to add car
function add_car($owner_id, $car_model_name, $car_reg_no, $is_available, $car_img_url)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("INSERT INTO Car (owner_id, car_model_name, car_reg_no, is_available, car_img_url)
                                     VALUES ('$owner_id', '$car_model_name', '$car_reg_no', '$is_available', '$car_img_url')");
    return $result;
}

function find_car_by_id($car_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $result = $con_obj->query("SELECT * FROM Car WHERE car_id='$car_id'");
    return $result;
}

function update_car($owner_id, $car_model_name, $car_reg_no, $is_available, $car_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $sql = "UPDATE Car SET owner_id='$owner_id',  car_model_name='$car_model_name', car_reg_no='$car_reg_no', is_available='$is_available',  WHERE car_id='$car_id'";

    if ($con_obj->query($sql) === TRUE) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return  $result;
}
