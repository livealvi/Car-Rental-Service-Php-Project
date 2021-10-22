<?php
//Rent class model for db
class Rent{
    private $rent_id;
    private $rent_date;
    private $rent_return_date;
    private $car_id;
    private $owner_id;
    private $renter_id;
    private $employee_id;

    //default constructor
    public function __construct()
    {
        $this->rent_id = 0;
        $this->rent_date = "";
        $this->rent_return_date = "";
        $this->car_id = 0;
        $this->owner_id = 0;
        $this->renter_id = 0;
        $this->employee_id = 0;
    }

    //setter getter methods
    public function getRentId()
    {
        return $this->rent_id;
    }

    public function setRentId($rent_id)
    {
        $this->rent_id = $rent_id;
    }

    public function getRentDate()
    {
        return $this->rent_date;
    }

    public function setRentDate($rent_date)
    {
        $this->rent_date = $rent_date;
    }

    public function getRentReturnDate()
    {
        return $this->rent_return_date;
    }

    public function setRentReturnDate($rent_return_date)
    {
        $this->rent_return_date = $rent_return_date;
    }

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

    public function getRenterId()
    {
        return $this->renter_id;
    }

    public function setRenterId($renter_id)
    {
        $this->renter_id = $renter_id;
    }

    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
    }

}