<?php
include '../models/DB_Ops.php';
include '../models/user.php';

class userController {
    public function Db_Ops($Data) {
        $db = new DB_Ops();
        //Don't forget userImg
        if($db->insertUser($Data) == false)
        {
            echo '<script>alert("Enter another user name")</script>';
        }
        else{
        echo'<script>alert("Registered sucessfully")</script>';
        }
    }
    public function insertUser()
    {
        $username = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        //$userImage = $_POST['userImage'];
        $email = $_POST['email'];

        $Data = new UserModel($username, $full_name, $birthdate,
        $phone, $address, $password, $email);

        $this->Db_Ops($Data);
    }
}

$userController = new userController();
$userController->insertUser();

?>