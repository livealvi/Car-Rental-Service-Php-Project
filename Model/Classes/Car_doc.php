<?php
//Car_doc class model for db
class Car_doc{
    private $doc_id;
    private $car_id;
    private $registration_url;
    private $insurance_url;

    //default constructor
    public function __construct()
    {
        $this->doc_id = 0;
        $this->car_id = 0;
        $this->registration_url = "";
        $this->insurance_url = "";
    }

    //setter getter methods
    public function getDocId()
    {
        return $this->doc_id;
    }

    public function setDocId($doc_id)
    {
        $this->doc_id = $doc_id;
    }

    public function getCarId()
    {
        return $this->car_id;
    }

    public function setCarId($car_id)
    {
        $this->car_id = $car_id;
    }

    public function getRegistrationUrl()
    {
        return $this->registration_url;
    }

    public function setRegistrationUrl($registration_url)
    {
        $this->registration_url = $registration_url;
    }

    public function getInsuranceUrl()
    {
        return $this->insurance_url;
    }

    public function setInsuranceUrl($insurance_url)
    {
        $this->insurance_url = $insurance_url;
    }

}