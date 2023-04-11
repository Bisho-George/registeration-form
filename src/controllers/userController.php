<?php
include '../models/DB_Ops.php';
include '../models/user.php';
include './upload.php';
class userController {
    public function insert($Data) {
        $db = new DB_Ops();
        if($db->insertUser($Data) == false)
        {
            echo'<script>alert("Username is already exists")</script>';
            // header("Location: ../../index.php");
        }
        else{
            echo'<script>alert("Registered sucessfully")</script>';
        }
    }
    public function register()
    {
        $username = $_POST['username'];
        $full_name = $_POST['fullName'];
        $birthdate = $_POST['birthDate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $userImage = $_FILES['userImage']['name'];
        $email = $_POST['email'];
        $Data = new UserModel($username, $full_name, $birthdate,
        $phone, $address, $password, $userImage, $email);
        $this->insert($Data);
        $imageFile = new ImageUploader($userImage);
        $imageFile->uploadImage();
    }
}
$userController = new userController();
$userController->register();


?>