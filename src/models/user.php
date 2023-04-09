<?php

    //include('../config/DB_Ops.php');
    class UserModel {
        private $username;
        private $fullName;
        private $birthdate;
        private $phone;
        private $address;
        private $password;
        private $userImage;
        private $email;
        //Don't forget userImg
        public function __construct($username, $fullName, $birthdate, 
        $phone, $address, $password, $email) 
        {
            $this->username = $username;
            $this->fullName = $fullName;
            $this->birthdate = $birthdate;
            $this->address = $address;
            $this->password = $password;
            $this->email = $email;

           /* $db = new DB_Ops();
            //Don't forget userImg
            if($db->insertUser($username, $fullName, $birthdate, 
            $phone, $address, $password, $email) == false)
            {
                echo '<script>alert("Enter another user name")</script>';
            }
            else{
            echo'<script>alert("Registered sucessfully")</script>';
            }*/
        }
        public function getUserName()
        {
            return $this->username;
        }
        public function getFullName()
        {
            return $this->fullName;
        }public function getBirthdate()
        {
            return $this->birthdate;
        }public function getAddress()
        {
            return $this->address;
        }public function getPassword()
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
}
//not Sure.....
/*$username = $_POST['user_name'];
$full_name = $_POST['full_name'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
//$userImage = $_POST['userImage'];
$email = $_POST['email'];

$Data = new User($username, $full_name, $birthdate,
$phone, $address, $password, $email);
*/
?>