<?php
//User class model for db
class User
{
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_mobile;
    private $user_password;
    private $user_type;
    private $user_img_url;
    private $archive_status;

    //default constructor
    public function __construct()
    {
        $this->user_id = 0;
        $this->user_name = "";
        $this->user_email = "";
        $this->user_mobile = "";
        $this->user_password = "";
        $this->user_type = "";
        $this->user_img_url = "";
        $this->archive_status = "";
    }

    //getter and setter methods
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function getUserEmail()
    {
        return $this->user_email;
    }

    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    public function getUserMobile()
    {
        return $this->user_mobile;
    }

    public function setUserMobile($user_mobile)
    {
        $this->user_mobile = $user_mobile;
    }

    public function getUserPassword()
    {
        return $this->user_password;
    }

    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    public function getUserType()
    {
        return $this->user_type;
    }

    public function setUserType($user_type)
    {
        $this->user_type = $user_type;
    }

    public function getUserImgUrl()
    {
        return $this->user_img_url;
    }

    public function setUserImgUrl($user_img_url)
    {
        $this->user_img_url = $user_img_url;
    }

    public function getArchiveStatus()
    {
        return $this->archive_status;
    }

    public function setArchiveStatus($archive_status)
    {
        $this->archive_status = $archive_status;
    }
}
