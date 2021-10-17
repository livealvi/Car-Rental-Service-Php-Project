<?php

//Function to connect to database
function db_connect(){
    $servername = "144.208.125.220";
    $username = "alvihasa_CarRental";
    $password = "CarRental1";
    $dbname = "alvihasa_CarRentalDB";

    $connection = new mysqli($servername, $username, $password, $dbname) or die("Could not connect to DataBase ". $connection -> connect_error);

    return $connection;
}

//Function to close connection to database
function db_disconnect($connection) {
    $connection -> close();
}

