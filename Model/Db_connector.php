<?php
//database accessor class
class Db{

//Function to connect to database
    function open_con()
    {
        $servername = "localhost";
        $username = "root";
        $password = "276914049";
        $dbname = "alvihasa_CarRentalServiceDB";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        else {
            return $connection;
        }

    }

//Function to close connection to database
    function close_con($connection)
    {
        $connection->close();
    }
}

