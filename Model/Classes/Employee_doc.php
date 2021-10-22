<?php
//Employee_doc class model for db
class Employee_doc{
    private $doc_id;
    private $user_id;
    private $nid_no;
    private $nid_url;


    //default constructor
    public function __construct()
    {
        $this->doc_id = 0;
        $this->user_id = 0;
        $this->nid_no = 0;
        $this->nid_url = "";
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

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setEmployeeId($Employee_id)
    {
        $this->user_id = $Employee_id;
    }

    public function getNidNo()
    {
        return $this->nid_no;
    }

    public function setNidNo($nid_no)
    {
        $this->nid_no = $nid_no;
    }

    public function getNidUrl()
    {
        return $this->nid_url;
    }

    public function setNidUrl($nid_url)
    {
        $this->nid_url = $nid_url;
    }

}
