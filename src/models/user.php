<?php

//include('../config/DB_Ops.php');
class UserModel
{
    private $username;
    private $fullName;
    private $birthdate;
    private $phone;
    private $address;
    private $password;
    private $userImage;
    private $email;
    //Don't forget userImg
    public function __construct(
        $username,
        $fullName,
        $birthdate,
        $phone,
        $address,
        $password,
        $userImage,
        $email
    ) {
        $this->username = $username;
        $this->fullName = $fullName;
        $this->birthdate = $birthdate;
        $this->address = $address;
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->userImage = $userImage;
    }
    public function getUserName()
    {
        return $this->username;
    }
    public function getFullName()
    {
        return $this->fullName;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getUserImage()
    {
        return $this->userImage;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getImageName() {
        return $this->userImage;
    }
}
