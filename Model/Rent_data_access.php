<?php
/*This file will hold all the data queries related to RENT table
of the database. For RENT related functionality, add this file
as required in control layer, add new methods to thi file and call
required methods in control layer methods. PLease maintain proper
naming convention to prevent ambiguity among method names*/

require_once 'Db_connector.php';
require_once 'Classes/Rent.php';

//function to get all rent data
function get_all_rent_info()
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $result = $con_obj->query("SELECT * FROM Rent");
    if ($result->num_rows > 0) {
        $rent_list = [];
        while ($row = $result->fetch_assoc()) {
            $rent = new Rent();
            $rent->setRentId($row["rent_id"]);
            $rent->setCarId($row["car_id"]);
            $rent->setOwnerId($row["owner_id"]);
            $rent->setRenterId($row["renter_id"]);
            $rent->setEmployeeId($row["employee_id"]);
            $rent->setRentDate($row["rent_date"]);
            $rent->setRentReturnDate($row["rent_return_date"]);
            array_push($rent_list, $rent);
        }
        $connection->close_con($con_obj);
        return $rent_list;
    } else {
        $connection->close_con($con_obj);
        return null;
    }
}


function find_rent_by_id($rent_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $result = $con_obj->query("SELECT * FROM Rent WHERE rent_id='$rent_id'");
    return $result;
}

function add_booking($rent_date, $rent_return_date, $car_id, $owner_id, $renter_id, $employee_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("INSERT INTO Rent ( rent_date, rent_return_date, car_id, owner_id, renter_id, employee_id)
                                     VALUES ('$rent_date', '$rent_return_date', '$car_id', '$owner_id', '$renter_id', $employee_id)");
    return $result;
}

function update_booking($rent_id, $car_id, $owner_id, $renter_id,  $employee_id, $rent_date, $rent_return_date)
{
    $connection = new db();
    $con_obj = $connection->open_con();

    $sql = "UPDATE Rent SET rent_date='$rent_date',  rent_return_date='$rent_return_date', car_id='$car_id', owner_id='$owner_id', renter_id='$renter_id', employee_id='$employee_id'  WHERE rent_id='$rent_id'";

    if ($con_obj->query($sql) === TRUE) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return  $result;
}

function delete_booking($rent_id)
{
    $connection = new db();
    $con_obj = $connection->open_con();
    $result = $con_obj->query("DELETE FROM Rent WHERE rent_id='$rent_id'");
    return $result;
}
