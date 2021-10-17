<?php
//Car class model for db
class Car{
    private $car_id;
    private $owner_id;
    private $car_model_name;
    private $car_reg_no;
    private $is_available;

    //default Constructor
    public function __construct()
    {
        $this->car_id = 0;
        $this->owner_id = 0;
        $this->car_model_name = "";
        $this->car_reg_no = "";
        $this->is_available = "";
    }

    //getter and setter methods
    public function getCarId()
    {
        return $this->car_id;
    }

    public function setCarId($car_id)
    {
        $this->car_id = $car_id;
    }

    public function getOwnerId()
    {
        return $this->owner_id;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
    }

    public function getCarModelName()
    {
        return $this->car_model_name;
    }

    public function setCarModelName($car_model_name)
    {
        $this->car_model_name = $car_model_name;
    }

    public function getCarRegNo()
    {
        return $this->car_reg_no;
    }

    public function setCarRegNo($car_reg_no)
    {
        $this->car_reg_no = $car_reg_no;
    }

    public function getIsAvailable()
    {
        return $this->is_available;
    }

    public function setIsAvailable($is_available)
    {
        $this->is_available = $is_available;
    }

}
