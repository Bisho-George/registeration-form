<?php
include '../models/DB_Ops.php';
include '../models/user.php';
include './upload.php';
class userController
{
    //private $response;
    public function insert($Data)
    {
        $db = new DB_Ops();
        $msg = "";
        if ($db->insertUser($Data) == 'username is already exists') {
            $msg = 'Username is already exists';
        } else {
            $msg = 'Registered sucessfully';
        }
        return $msg;
    }
    public function getActorDate($Data)
    {
        $actorData = new ApiModel();
        $customerBirtDate = $Data->getBirthdate();
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

        $Data = new UserModel(
            $username,
            $full_name,
            $birthdate,
            $phone,
            $address,
            $password,
            $userImage,
            $email
        );
        $formMsg = $this->insert($Data);
        $imageFile = new ImageUploader($userImage);
        $res = $imageFile->uploadImage();
        $response = array(
            "imgMsg" => $res,
            "formMsg" => $formMsg
        );
        echo json_encode($response);
    }
}
$userController = new userController();
$userController->register();
